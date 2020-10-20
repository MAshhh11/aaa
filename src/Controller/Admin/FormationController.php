<?php

namespace App\Controller\Admin;

use App\Entity\Course;
use App\Entity\CourseFile;
use App\Entity\CourseFormation;
use App\Entity\Exercice;
use App\Entity\ExerciceFile;
use App\Entity\Formation;
use App\Entity\FormationUser;
use App\Form\CourseType;
use App\Form\ExerciceType;
use App\Form\FormationType;
use App\Service\FileUploader;
use App\Service\Tool;
use Proxies\__CG__\App\Entity\CourseExercice;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



/**
 * @Route("espace-etudiant/admin/formations")
 * @Security("is_granted('ROLE_ADMIN')")
 */
class FormationController extends AbstractController
{
    /**
     * @Route("/", name="formation_index")
     */
    public function index()
    {

        return $this->render('admin/formation/index.html.twig', [
        ]);
    }

    /**
     * @Route("/donnees", name="formation_datas")
     */
    public function datasAction(Request $request, Tool $tool)
    {
        $em = $this->getDoctrine()->getManager();

        $sorts = array(
            'c.title',
            'c.is_active',
            'c.created_at'
        );

        $sql = "SELECT c.*
            FROM formation as c
            WHERE c.id > 0 ";

        $records = $tool->getScriptTable($sql, $sorts, $em); // SCRIPT PHP NON MODIFIABLE  DE REQUETES POUR RESULTATS TABLEAU DATATABLE JSON

        foreach ($records['results'] as $result):

            $result['created_at'] = new \DateTime($result['created_at']);
            $result['created_at'] = $result['created_at']->format('d/m/Y');

            if( $result['is_active'] == 0) {
                $result['is_active'] = "Non";
            } else {
                $result['is_active'] = "Oui";
            }

            $row = array(
                $result['title'],
                $result['is_active'],
                $result['created_at'],
            );

            $actions = '<div class="md-btn-group">';
            $actions .= '<a href="'.$this->generateUrl('formation_form', array('id'=>$result['id'])).'" class="btn btn-icon-only btn-primary btn-sm" data-toggle="tooltip" data-original-title="Modifier"><i class="fas fa-edit"></i></a>';

            $tokenProvider = $this->container->get('security.csrf.token_manager');
            $token = $tokenProvider->getToken('delete'.$result['id'])->getValue();

            $actions .= '<a href="javascript:void(0);" class="btn btn-sm btn-icon-only btn-danger confirmDeleteBox" data-message="Souhaitez-vous supprimer définitivement cette formation ?<br/> Toutes les données rattachées à cette formation seront automatiquement supprimées."
                            data-token="'.$token.'" data-url="'.$this->generateUrl('formation_delete', array('id'=>$result['id'])).'" data-toggle="tooltip" data-original-title="Suppression"><i class="fas fa-trash"></i></a>';

            $actions .= '</div>';
            $row[] = $actions;

            $records["aaData"][] = $row;

        endforeach;

        return new response(json_encode($records));
    }

    /**
     * @Route("/formulaire/{id}", requirements={}, name="formation_form")
     * @param Request $request
     * @param null $id
     * @param FileUploader $fileUploader
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function form(Request $request, $id = NULL, FileUploader $fileUploader)
    {
        $em = $this->getDoctrine();
        $session = $this->get('session');

        if($id) {
            $item = $em->getRepository(Formation::class)->find($id);
            $courses = $em->getRepository(CourseFormation::class)->findBy(['formation' => $item]);
            $checkCourses = [];
            foreach ($courses as $course){
                $checkCourses []= $course->getCourse()->getId();
            }
        } else {
            $item = new Formation();
            $checkCourses = null;
        }

        $courses = $em->getRepository(Course::class)->findAll();


        $form = $this->createForm(FormationType::class, $item);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if($id) {
                $session->getFlashBag()->add('success', "La formation a bien été modifiée");
            } else {
                $session->getFlashBag()->add('success', "La formation a bien été créée");
            }
            $item = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($item);
            $entityManager->flush();

            return $this->redirectToRoute('formation_form', array('id'=>$item->getId()));
        }

        return $this->render('admin/formation/form.html.twig', array(
            'item' => $item,
            'courses' => $courses,
            'checkCourses' => $checkCourses,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/ordre-des-cours-enregistrement", name="course_formation_rank")
     */
    public function courseRankSave(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $order = $request->request->get('order');
        $formation = $request->request->get('formation');
        $formation = $em->getRepository(Formation::class)->find($formation);

        $orderExplodes = explode("|", $order);

        $delete = $em->getRepository(CourseFormation::class)->findBy(['formation' => $formation]);
        foreach ($delete as $item) {
            $em->remove($item);
            $em->flush();
        }

        foreach($orderExplodes as $r => $orderExplode) {
            $course = $em->getRepository(Course::class)->find($orderExplode);

            if($course) {
                $exist = $em->getRepository(CourseFormation::class)->findOneBy(['formation' => $formation, 'course' => $course]);
                if($exist) {
                    $courseFormation = $exist;
                } else {
                    $courseFormation = new CourseFormation();
                }
                $courseFormation->setRank($r+1);
                $courseFormation->setCourse($course);
                $courseFormation->setFormation($formation);
                $em->persist($courseFormation);
                $em->flush();
            }
        }

        return new Response("ok");
    }


    /**
     * @Route("/suppression/{id}", name="formation_delete", methods="DELETE")
     * @param Request $request
     * @param Course $course
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function delete(Request $request, Formation $formation)
    {
        $session = $this->get('session');
        $formationUsers = $this->getDoctrine()->getRepository(FormationUser::class)->findBy(['formation' => $formation]);
        if($formationUsers == null) {
            if ($this->isCsrfTokenValid('delete'.$formation->getId(), $request->request->get('_token'))) {

                $em = $this->getDoctrine()->getManager();
                $em->remove($formation);
                $em->flush();
                $session->getFlashBag()->add('success', "La suppression a bien été effectuée");

            } else {
                $session->getFlashBag()->add('error', "Erreur !");
            }
        } else {
            $session->getFlashBag()->add('error', "Vous ne pouvez pas supprimer cette formation! Dès élèves la suive encore");
        }

        return $this->redirectToRoute('formation_index',[]);
    }

}
