<?php

namespace App\Controller\Admin;

use App\Entity\CotisationClubArchiveUser;
use App\Entity\CotisationUnionArchiveClub;
use App\Entity\CotisationUnionArchiveUser;
use App\Entity\CotisationUnionCall;
use App\Entity\FormationUser;
use App\Form\UserFormationType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use App\Service\FileUploader;
use App\Service\Tool;

use App\Form\UserType;
use App\Form\UserClubType;
use App\Form\UserFunctionType;
use App\Form\UserJobType;
use App\Form\UserAvatarType;

use App\Entity\User;
use App\Entity\Club;
use App\Entity\DataRole;
use App\Entity\UserClub;
use App\Entity\UserFunction;
use App\Entity\UserJob;
use App\Entity\DataOperation;


/**
 * @Route("/espace-etudiant/admin/utilisateurs")
 * @Security("is_granted('ROLE_ADMIN')")
 */

class UserController extends AbstractController
{
    /**
     * @Route("/liste", name="user_index")
     */
    public function index()
    {
        return $this->render('admin/user/index.html.twig', array());
    }
    
    /**
     * @Route("/donnees", name="user_datas")
     */
    public function datasAction(Request $request, Tool $tool)
    {
        $em = $this->getDoctrine()->getManager(); 

        $sorts = array(
            'u.lastname',
            'u.firstname',
        );

        $sql = "SELECT u.*
            FROM user as u 
            WHERE u.id > 0 and u.is_exception IS NULL";
        
        $records = $tool->getScriptTable($sql, $sorts, $em); // SCRIPT PHP NON MODIFIABLE  DE REQUETES POUR RESULTATS TABLEAU DATATABLE JSON 

        foreach ($records['results'] as $result):

            $row = array(
                $result['lastname'],
                $result['firstname'],
            );

            $actions = '<div class="md-btn-group">';
            $actions .= '<a href="'.$this->generateUrl('user_form', array('id'=>$result['id'])).'" class="btn btn-icon-only btn-primary btn-sm" data-toggle="tooltip" data-original-title="Modifier"><i class="fas fa-edit"></i></a>';  
            
            $tokenProvider = $this->container->get('security.csrf.token_manager');
            $token = $tokenProvider->getToken('delete'.$result['id'])->getValue();
              
            $actions .= '<a href="javascript:void(0);" class="btn btn-sm btn-icon-only btn-danger confirmDeleteBox" data-message="Souhaitez-vous supprimer définitivement cet utilisateur ?<br/> Toutes les données rattachées à cet utilisateur seront automatiquement supprimées."
                            data-token="'.$token.'" data-url="'.$this->generateUrl('user_delete', array('id'=>$result['id'])).'" data-toggle="tooltip" data-original-title="Suppression"><i class="fas fa-trash"></i></a>';
       
            $actions .= '</div>';
            $row[] = $actions;
            
            $records["aaData"][] = $row;

        endforeach;

        return new response(json_encode($records));
    }
    
    /**
     * @Route("/formulaire/{id}", requirements={}, name="user_form")
     */
    public function form(Request $request, $id = NULL, FileUploader $fileUploader, UserPasswordEncoderInterface $passwordEncoder, \Swift_Mailer $mailer, UrlGeneratorInterface $router)
    {
        $em = $this->getDoctrine();    
        $session = $this->get('session');
        $user = $this->get('security.token_storage')->getToken()->getUser();

        if($id) {
            $item = $em->getRepository(User::class)->find($id);        
            $originalPassword = $item->getPassword(); 
        } else {
            $item = new User();  
            $originalPassword = ""; 
        }

        if($id) {
            $sql = "SELECT f.title, uf.* 
                FROM formation  as f LEFT JOIN formation_user as uf on f.id = uf.formation_id 
                WHERE uf.user_id = " . $id;
            $qb = $em->getConnection()->prepare($sql);
            $qb->execute();
            $formations = $qb->fetchAll();
        } else {
            $formations = null;
        }

        $form = $this->createForm(UserType::class, $item);
        $form->handleRequest($request);
                        
        if ($form->isSubmitted() && $form->isValid()) {
            
            if($id) {
                $session->getFlashBag()->add('success', "L'utilisateur a bien été modifié");
            } else {
                $session->getFlashBag()->add('success', "L'utilisateur a bien été créé");
            }           
            
            $item = $form->getData();
            $item->setLastActivity( new \DateTime());
            $entityManager = $this->getDoctrine()->getManager();


            if($form['password']->getData()) {
                $item->setPassword($passwordEncoder->encodePassword(
                    $item,
                    $form['password']->getData()
                ));
            } else {
                 $item->setPassword($originalPassword);
            }
            
            
            $roles= $request->request->get('roles');            
            if($roles) {
                $item->setRoles($roles);
            }
            
            $entityManager->persist($item);
            $entityManager->flush();
            
            if($form['sendEmail']->getData()) {
                
                $item->setToken(uniqid());
                $entityManager->persist($item);
                $entityManager->flush();                
                
                $url = $this->generateUrl('security_update_password', ['email' =>$item->getEmail(), 'token' => $item->getToken()], UrlGeneratorInterface::ABSOLUTE_URL);                
                $message = (new \Swift_Message())
                    ->setSubject('Modification de votre mot de passe')
                    ->setFrom(array($_ENV['MAILER_ADDRESS'] => "anais.mourat@limeointeractive.com"))
                    ->setTo($item->getEmail())
                    ->setContentType('text/html')
                   ->setBody($this->renderView('emails/reset-pwd.html.twig', array('user' => $item, 'url' => $url)));

                $mailer->send($message);                
                $session->getFlashBag()->add('success', "Un e-mail de récupération de mot de passe à été envoyé.");
            }

            return $this->redirectToRoute('user_form', array('id'=>$item->getId()));
        }
        
        $roles = $em->getRepository(DataRole::class)->findBy(array(), array('id' => 'ASC'));   
        
        return $this->render('admin/user/form.html.twig', array(
            'item' => $item,
            'roles' => $roles,
            'form' => $form->createView(),
            'formations' => $formations
        ));
    }


    /**
     * @Route("/formation/{user}", name="user_formation")
     * @param Request $request
     * @param User $user
     * @return Response
     */
    public function userFormation(Request $request, User $user)
    {

        $em = $this->getDoctrine();
        $session = $this->get('session');

        $item = new FormationUser();

        $form = $this->createForm(UserFormationType::class, $item);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $isCurrent = $form->getData()->getIsCurrent();

            if($isCurrent == true) {
              $check = $em->getRepository(FormationUser::class)->findBy(['user' => $user, 'is_current' => 1]);
              if($check){
                  $session->getFlashBag()->add('error', "Cet élève suit déjà une formation");
                  return $this->redirectToRoute('user_form', ['id' => $user->getId()]);
              }
            }
            $now = new \DateTime();
            $item = $form->getData();
            $item->setCreatedAt($now);
            $item->setUser($user);
            $item->setUpdatedAt($now);
            $em->getManager()->persist($item);
            $em->getManager()->flush();
            $session->getFlashBag()->add('success', "Cet élève a bien été rattaché à la formation" . $item->getFormation()->getTitle());
            return $this->redirectToRoute('user_form', ['id' => $user->getId()]);
        }

        return $this->render('admin/user/user_formation_form.html.twig', array(
            'item' => $item,
            'user' => $user,
            'form' => $form->createView(),
        ));
    }


    /**
     * @Route("/suppression/{id}", name="user_delete", methods="DELETE")
     */
    public function delete(Request $request, User $user)
    {
        $session = $this->get('session');       
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {            

            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
            $session->getFlashBag()->add('success', "La suppression a bien été effectuée");

        } else {
           $session->getFlashBag()->add('error', "Erreur !");   
        }

        return $this->redirectToRoute('user_index',[]);
    }
    /**
     * @Route("/suppression/userformation/{id}", name="userformation_delete", methods="DELETE")
     * @param Request $request
     * @param FormationUser $userformation
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteUserFormation(Request $request, FormationUser $userformation)
    {

        $session = $this->get('session');
        if ($this->isCsrfTokenValid('delete'.$userformation->getId(), $request->request->get('_token'))) {
            $user = $userformation->getUser();

            $em = $this->getDoctrine()->getManager();
            $em->remove($userformation);
            $em->flush();
            $session->getFlashBag()->add('success', "La suppression a bien été effectuée");

        } else {
            $session->getFlashBag()->add('error', "Erreur !");
        }

        return $this->redirectToRoute('user_form', ['id' => $user->getId()]);
    }

    
}
