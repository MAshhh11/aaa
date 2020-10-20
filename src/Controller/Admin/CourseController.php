<?php

namespace App\Controller\Admin;

use App\Entity\Course;
use App\Entity\CourseFile;
use App\Entity\Exercice;
use App\Entity\ExerciceFile;
use App\Form\CourseType;
use App\Form\ExerciceType;
use App\Service\FileUploader;
use App\Service\Tool;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use Proxies\__CG__\App\Entity\CourseExercice;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



/**
 * @Route("/espace-etudiant/admin/modules")
 * @Security("is_granted('ROLE_ADMIN')")
 */
class CourseController extends AbstractController
{
    /**
     * @Route("/", name="course_index")
     */
    public function index()
    {

        return $this->render('admin/course/index.html.twig', [
        ]);
    }

    /**
     * @Route("/donnees", name="course_datas")
     */
    public function datasAction(Request $request, Tool $tool)
    {
        $em = $this->getDoctrine()->getManager();

        $sorts = array(
            'c.title',
            'c.created_at'
        );

        $sql = "SELECT c.*
            FROM course as c
            WHERE c.id > 0 ";

        $records = $tool->getScriptTable($sql, $sorts, $em); // SCRIPT PHP NON MODIFIABLE  DE REQUETES POUR RESULTATS TABLEAU DATATABLE JSON

        foreach ($records['results'] as $result):

            $result['created_at'] = new \DateTime($result['created_at']);
            $result['created_at'] = $result['created_at']->format('d/m/Y');


            $row = array(
                $result['title'],
                $result['created_at'],
            );

            $actions = '<div class="md-btn-group">';
            $actions .= '<a href="'.$this->generateUrl('course_form', array('id'=>$result['id'])).'" class="btn btn-icon-only btn-primary btn-sm" data-toggle="tooltip" data-original-title="Modifier"><i class="fas fa-edit"></i></a>';

            $tokenProvider = $this->container->get('security.csrf.token_manager');
            $token = $tokenProvider->getToken('delete'.$result['id'])->getValue();

            $actions .= '<a href="javascript:void(0);" class="btn btn-sm btn-icon-only btn-danger confirmDeleteBox" data-message="Souhaitez-vous supprimer définitivement ce cours ?<br/> Toutes les données rattachées à cet exercice seront automatiquement supprimées."
                            data-token="'.$token.'" data-url="'.$this->generateUrl('course_delete', array('id'=>$result['id'])).'" data-toggle="tooltip" data-original-title="Suppression"><i class="fas fa-trash"></i></a>';

            $actions .= '</div>';
            $row[] = $actions;

            $records["aaData"][] = $row;

        endforeach;

        return new response(json_encode($records));
    }

    /**
     * @Route("/formulaire/{id}", requirements={}, name="course_form")
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
            $item = $em->getRepository(Course::class)->find($id);
            $exercices = $em->getRepository(CourseExercice::class)->findBy(['course' => $item]);
            $checkExercices = [];
            foreach ($exercices as $exercice){
                $checkExercices []= $exercice->getExercice()->getId();
            }
        } else {
            $item = new Course();
            $checkExercices = null;
        }

        $attachments = $em->getRepository(CourseFile::class)->findBy(['course' => $id]);
        $exercices = $em->getRepository(Exercice::class)->findAll();

        $form = $this->createForm(CourseType::class, $item);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if($id) {
                $session->getFlashBag()->add('success', "Le cours a bien été modifié");
            } else {
                $session->getFlashBag()->add('success', "Le cours a bien été créé");
            }
            $item = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($item);

            $dir = $this->getParameter('kernel.project_dir').'/uploads/cours/cours_'.$item->getId()."/";

            if(!is_dir($dir)){
                mkdir($dir,0755, true);
            }

            if($_FILES && $_FILES['files']) {

                foreach($_FILES['files']['size'] as $k => $filesize) {
                    if($filesize > 0) {
                        if(file_exists($dir.$_FILES['files']['name'][$k])) {
                            $filename = uniqid().$_FILES['files']['name'][$k];
                        } else {
                            $filename = $_FILES['files']['name'][$k];
                        }
                        if(move_uploaded_file($_FILES['files']['tmp_name'][$k], $dir.$filename)) {
                            $newFile = new CourseFile();
                            $newFile->setfile($filename);
                            $newFile->setCourse($item);
                            $entityManager->persist($newFile);
                        }

                    }

                }
            }
            $entityManager->flush();

            if($request->request->get('remove_attachments')) {
                foreach($request->request->get('remove_attachments') as $attachmentRemove) {
                    if($attachmentRemove) {
                        $attachmentRemoved = $em->getRepository(CourseFile::class)->find($attachmentRemove);
                        unlink($dir.$attachmentRemoved->getFile());
                        $entityManager->remove($attachmentRemoved);
                        $entityManager->flush();
                    }
                }
            }

            return $this->redirectToRoute('course_form', array('id'=>$item->getId()));
        }

        return $this->render('admin/course/form.html.twig', array(
            'item' => $item,
            'exercices' => $exercices,
            'checkExercices' => $checkExercices,
            'attachments' => $attachments,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/ordre-des-exercices-enregistrement", name="course_exercice_rank")
     */
    public function exerciceRankSave(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $order = $request->request->get('order');
        $cours = $request->request->get('cours');

        $coursExercices = $em->getRepository(CourseExercice::class)->findBy(['course' => $cours]);
        foreach ($coursExercices as $coursExercice) {
            $em->remove($coursExercice);
            $em->flush();
        }

        $orderExplodes = explode("|", $order);

        foreach($orderExplodes as $r => $orderExplode) {
            $exercice = $em->getRepository(Exercice::class)->find($orderExplode);
            $cours = $em->getRepository(Course::class)->find($cours);
            if($exercice) {
                $coursExercice = new CourseExercice();
                $coursExercice->setRank($r+1);
                $coursExercice->setCourse($cours);
                $coursExercice->setExercice($exercice);
                $em->persist($coursExercice);
                $em->flush();
            }
        }

        return new Response("ok");
    }


    /**
     * @Route("/suppression/{id}", name="course_delete", methods="DELETE")
     * @param Request $request
     * @param Course $course
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function delete(Request $request, Course $course)
    {
        $session = $this->get('session');
        if ($this->isCsrfTokenValid('delete'.$course->getId(), $request->request->get('_token'))) {

            $em = $this->getDoctrine();
            $courseExercices = $em->getRepository(CourseExercice::class)->findBy(['course' => $course]);
            foreach($courseExercices as $courseExercice) {
                $em->getManager()->remove($courseExercice);
            }
            $em->getManager()->remove($course);
            $em->getManager()->flush();
            $session->getFlashBag()->add('success', "La suppression a bien été effectuée");

        } else {
            $session->getFlashBag()->add('error', "Erreur !");
        }

        return $this->redirectToRoute('course_index',[]);
    }

    /**
     * @Route("/telecharger-cours/{id}/{filename}", name="download_file_admin_course")
     * @param $id
     * @param $filename
     */
    public function downloadAction($id, $filename)
    {
        $em = $this->getDoctrine()->getManager();
        $course = $em->getRepository(Course::class)->find($id);
        $item = $em->getRepository(CourseFile::class)->findOneBy(array('course' => $course, 'file' => $filename));
        $file = $this->getParameter('kernel.project_dir').'/uploads/cours/cours_'.$item->getCourse()->getId().'/'.$item->getFile();

        if (file_exists($file)) {
            $size = filesize($file);
            header("Cache-Control: no-cache, must-revalidate");
            header("Cache-Control: post-check=0,pre-check=0");
            header("Cache-Control: max-age=0");
            header("Pragma: no-cache");
            header("Expires: 0");
            header("Content-Type: application/force-download");
            header('Content-Disposition: attachment; filename="' . $item->getFile() . '"');
            header('Content-Transfer-Encoding: binary');
            header("Content-Length: " . $size);
            readfile($file);
        }
        return $file;
    }

}
