<?php

namespace App\Controller\Student;

use App\Entity\Club;
use App\Entity\DataRole;
use App\Entity\User;
use App\Entity\UserClub;
use App\Entity\UserFunction;
use App\Entity\UserJob;
use App\Form\ProfileType;

use App\Form\UserAvatarType;
use App\Form\UserType;
use App\Service\FileUploader;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


/**
 * @Route("/espace-etudiant/profil")
 * @Security("is_granted('ROLE_USER')")
 */

class ProfileController extends AbstractController
{
    /**
     * @Route("/", name="profile")
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @return string
     */
    public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $item = $this->get('security.token_storage')->getToken()->getUser();
        $session = $this->get('session');
        $em = $this->getDoctrine();

        $originalPassword = $item->getPassword();

        $sql = "SELECT f.title, uf.* 
                FROM formation  as f LEFT JOIN formation_user as uf on f.id = uf.formation_id 
                WHERE uf.user_id = " . $item->getId();
        $qb = $em->getConnection()->prepare($sql);
        $qb->execute();
        $formations = $qb->fetchAll();

        $form = $this->createForm(ProfileType::class, $item);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();

            if($form['password']->getData()) {
                $item->setPassword($passwordEncoder->encodePassword(
                    $item,
                    $form['password']->getData()
                ));
            } else {
                $item->setPassword($originalPassword);
            }

            $em->getManager()->persist($user);
            $em->getManager()->flush();
            $session->getFlashBag()->add('success', "Les informations ont bien été modifiées");
        }
        return $this->render('student/profile/index.html.twig', array(
            'item' => $item,
            'form' => $form->createView(),
            'formations' => $formations
        ));
    }

    /**
     * @Route("/formulaire-avatar/", requirements={}, name="profile_form_avatar")
     */
    public function formAvatar(Request $request, FileUploader $fileUploader)
    {
        $em = $this->getDoctrine();
        $user = $this->getUser();

        $item = $em->getRepository(User::class)->find($user->getId());

        $form = $this->createForm(UserAvatarType::class, $item);

        $form->handleRequest($request);

        if ($form->isSubmitted() || $request->getMethod() == "POST") {
            $dir = $this->getParameter('kernel.project_dir').'/public/uploads/users/avatars/';
            $extension = "png";
            $filename = uniqid();

            if($_FILES && $_FILES['picture']) {

                if($item->getAvatarOriginal()) {
                    if($item->getAvatarOriginal() && file_exists($dir.$item->getAvatarOriginal())) {
                        unlink($dir.$item->getAvatarOriginal());
                    }
                }

                $extension = substr(strrchr($_FILES['picture']['name'], "."), 1);
                $filename_original = $filename."_original.".$extension;
                $filename_thumb = $filename."_thumb.".$extension;

                if (move_uploaded_file($_FILES['picture']['tmp_name'], $dir.$filename_original)) {
                    $item->setAvatarOriginal($filename_original);
                }
            } else {
                if($item->getAvatar()) {
                    $extension = substr(strrchr($item->getAvatar(), "."), 1);
                }
                $filename_thumb = $filename."_thumb.".$extension;
            }

            if($request->get('thumb')) {

                if($item->getAvatar() && file_exists($dir.$item->getAvatar())) {
                    unlink($dir.$item->getAvatar());
                }

                $this->base64_to_jpeg($request->get('thumb'), $dir.$filename_thumb);
                $item->setAvatar($filename_thumb);
            }

            if($request->get('reset') == 1) {
                if($item->getAvatarOriginal()) {
                    if($item->getAvatarOriginal() && file_exists($dir.$item->getAvatarOriginal())) {
                        unlink($dir.$item->getAvatarOriginal());
                    }
                }
                $item->setAvatarOriginal(NULL);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($item);
            $entityManager->flush();

            $session = $this->get('session');
            $session->getFlashBag()->add('success', "Votre photo a bien été mise à jour");

            $url = $this->generateUrl('profile', array(), UrlGeneratorInterface::ABSOLUTE_URL);
            return new response($url);
        }

        return $this->render('profile/form_avatar.html.twig', array(
            'item' => $item,
            'form' => $form->createView(),
        ));

    }

    private  function base64_to_jpeg($base64_string, $output_file) {
        $ifp = fopen( $output_file, 'wb' );
        $data = explode( ',', $base64_string );
        fwrite( $ifp, base64_decode( $data[ 1 ] ) );
        fclose($ifp);
        return $output_file;
    }


}