<?php

namespace App\Controller\Admin;

use App\Entity\Exercice;
use App\Entity\ExerciceFile;
use App\Entity\ExerciceTechnicalDocument;
use App\Entity\TechnicalDocument;
use App\Entity\UserExercice;
use App\Form\ExerciceType;
use App\Service\FileUploader;
use App\Service\Tool;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



/**
 * @Route("/espace-etudiant/documents-techniques")
 * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_USER') ")
 */
class TechnicalDocsController extends AbstractController
{
    /**
     * @Route("/", name="technical_doc_index")
     */
    public function index()
    {
        return $this->render('admin/technical_document/index.html.twig');
    }

    /**
     * @Route("/donnees", name="technical_doc_datas")
     */
    public function datasAction(Request $request, Tool $tool)
    {
        $em = $this->getDoctrine()->getManager();
        $user =$this->get('security.token_storage')->getToken()->getUser();

        $sorts = array(
            'td.file',
            'td.created_at'
        );

        if($this->isGranted('ROLE_ADMIN')) {
            $sql = "SELECT td.*
                FROM technical_document as td  WHERE td.id >0";
        } else {
            $sql = "SELECT etd.*,td.*
                FROM technical_document as td
                LEFT JOIN exercice_technical_document as etd  on td.id = etd.technical_document_id
                WHERE etd.exercice_id IS NULL ";
        }

        $records = $tool->getScriptTable($sql, $sorts, $em); // SCRIPT PHP NON MODIFIABLE  DE REQUETES POUR RESULTATS TABLEAU DATATABLE JSON


        //add documents unlocked through exercices
        if(!$this->isGranted('ROLE_ADMIN')) {
            $documents = $this->getTechnicalDocuments($user);
            foreach ($documents as $document){
                $records['results'] []= $document;
            }
        }

        foreach ($records['results'] as $result):

            $result['created_at'] = new \DateTime($result['created_at']);
            $result['created_at'] = $result['created_at']->format('d/m/Y');


            $row = array(
                $result['file'],
                $result['created_at'],
            );

            $actions = '<div class="md-btn-group">';
            $actions .= '<a href="' . $this->generateUrl('technical_doc_view', array('id' => $result['id'])) . '"class="btn btn-icon-only btn-primary btn-sm" data-toggle="tooltip" data-original-title="consulter"><i class="fas fa-eye"></i></a>';

            if($this->isGranted('ROLE_ADMIN')) {
                $actions .= '<a href="' . $this->generateUrl('technical_doc_form', array('id' => $result['id'])) . '" class="btn btn-icon-only btn-primary btn-sm" data-toggle="tooltip" data-original-title="Modifier"><i class="fas fa-edit"></i></a>';

                $tokenProvider = $this->container->get('security.csrf.token_manager');
                $token = $tokenProvider->getToken('delete' . $result['id'])->getValue();
                $actions .= '<a href="javascript:void(0);" class="btn btn-sm btn-icon-only btn-danger confirmDeleteBox" data-message="Souhaitez-vous supprimer définitivement cet exercice ?<br/> Toutes les données rattachées à cet exercice seront automatiquement supprimées."
                            data-token="' . $token . '" data-url="' . $this->generateUrl('technical_doc_delete', array('id' => $result['id'])) . '" data-toggle="tooltip" data-original-title="Suppression"><i class="fas fa-trash"></i></a>';

            }
            $actions .= '</div>';
            $row[] = $actions;

            $records["aaData"][] = $row;

        endforeach;

        return new response(json_encode($records));
    }

    /**
     * @Route("/consulter/{id}", requirements={}, name="technical_doc_view")
     * @param Request $request
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function view(Request $request, $id)
    {
        $em = $this->getDoctrine();
        $item = $em->getRepository(TechnicalDocument::class)->find($id);

        return $this->render('admin/technical_document/view.html.twig', array(
            'item' => $item,
        ));
    }

    /**
     * @Route("/formulaire/{id}", requirements={}, name="technical_doc_form")
     * @Security("is_granted('ROLE_ADMIN')")
     * @param Request $request
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function form(Request $request, $id = NULL)
    {
        $em = $this->getDoctrine();
        if($id) {
            $item = $em->getRepository(TechnicalDocument::class)->find($id);
            $exercices = $em->getRepository(ExerciceTechnicalDocument::class)->findBy(['technical_document' => $item]);
            $checkExercices = [];
            foreach ($exercices as $exercice){
                $checkExercices []= $exercice->getExercice()->getId();
            }
        } else {
            $item = null;
            $checkExercices = null;
        }
        $exercices = $em->getRepository(Exercice::class)->findAll();
        return $this->render('admin/technical_document/form.html.twig', array(
            'item' => $item,
            'exercices' => $exercices,
            'checkExercices' => $checkExercices,
        ));
    }


    /**
     * @Route("/enregistrer/{id}", name="technical_doc_save", methods="POST")
     * @Security("is_granted('ROLE_ADMIN')")
     * @param Request $request
     * @param FileUploader $fileUploader
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function saveDocument(Request $request, FileUploader $fileUploader,  $id = NULL)
    {
        $em = $this->getDoctrine();
        $session = $this->get('session');
        $now = new \DateTime();

        if($id){
            $newFile = $em->getRepository(TechnicalDocument::class)->find($id);
            $toDelete = $em->getRepository(ExerciceTechnicalDocument::class)->findBy(['technical_document' => $newFile]);
            foreach ($toDelete as $deleted) {
                $em->getManager()->remove($deleted);
                $em->getManager()->flush();
            }
            $session->getFlashBag()->add('success', "Le document a bien été modifié");
        } else {
            $newFile = new TechnicalDocument();
            $dir = $this->getParameter('kernel.project_dir').'/uploads/documents-techniques/document_'.$newFile->getId()."/";

            if(!is_dir($dir)){
                mkdir($dir,0755, true);
            }

            if($_FILES && $_FILES['files']) {
                $v = 0;
                foreach($_FILES['files']['size'] as $k => $filesize) {
                    if($filesize > 0) {
                        if(file_exists($dir.$_FILES['files']['name'][$k])) {
                            $filename = uniqid().$_FILES['files']['name'][$k];
                        } else {
                            $filename = $_FILES['files']['name'][$k];
                        }
                        if(move_uploaded_file($_FILES['files']['tmp_name'][$k], $dir.$filename)) {
                            $newFile->setfile($filename);
                            $newFile->setCreatedAt($now);
                            $em->getManager()->persist($newFile);
                            $em->getManager()->flush();
                        }
                        $v++;
                    }
                }
            }
            $session->getFlashBag()->add('success', "Le document a bien été ajouté !");
        }

        foreach ($request->request as $object) {
            $exercice = $em->getRepository(Exercice::class)->find($object);
            $item = new ExerciceTechnicalDocument();
            $item->setExercice($exercice);
            $item->setTechnicalDocument($newFile);
            $em->getManager()->persist($item);
            $em->getManager()->flush();
        }

        return $this->redirectToRoute('technical_doc_index');
    }

    /**
     * @Route("/suppression/{id}", name="technical_doc_delete", methods="DELETE")
     * @Security("is_granted('ROLE_ADMIN')")
     * @param Request $request
     * @param Exercice $exercice
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function delete(Request $request, TechnicalDocument $technicalDocument)
    {
        $session = $this->get('session');
        if ($this->isCsrfTokenValid('delete'.$technicalDocument->getId(), $request->request->get('_token'))) {

            $em = $this->getDoctrine()->getManager();

            $toDelete = $em->getRepository(ExerciceTechnicalDocument::class)->findBy(['technical_document' => $technicalDocument]);
            foreach ($toDelete as $deleted) {
                $em->remove($deleted);
                $em->flush();
            }

            $em->remove($technicalDocument);
            $em->flush();
            $session->getFlashBag()->add('success', "La suppression a bien été effectuée");

        } else {
            $session->getFlashBag()->add('error', "Erreur !");
        }

        return $this->redirectToRoute('technical_doc_index',[]);
    }

    private function getTechnicalDocuments($user)
    {
        $em = $this->getDoctrine();

        $sql = "SELECT f.*
            FROM formation_user as uf
            LEFT JOIN formation as f on f.id = uf.formation_id
            WHERE uf.is_current = 1 AND uf.user_id = " . $user->getId();

        $qb = $em->getConnection()->prepare($sql);
        $qb->execute();
        $formation = $qb->fetch();

        $sql = "SELECT f.title, c.*, fc.rank
            FROM  formation as f
            LEFT JOIN course_formation as fc on fc.formation_id = f.id
            LEFT JOIN course as c on fc.course_id = c.id
            WHERE f.id = " . $formation['id'] . " ORDER BY fc.rank";

        $qb = $em->getConnection()->prepare($sql);
        $qb->execute();
        $courses = $qb->fetchAll();

        $orderExercices = [];
        foreach ($courses as $course) {
            $sql = "SELECT ce.course_id, e.*, ce.rank, ce.exercice_id FROM course as c
                    LEFT JOIN course_exercice as ce on c.id = ce.course_id
                    LEFT JOIN exercice as e on ce.exercice_id = e.id
                    WHERE c.id = " . $course['id'] . " ORDER BY ce.rank";

            $qb = $em->getConnection()->prepare($sql);
            $qb->execute();
            $courseExercices = $qb->fetchAll();
            foreach ($courseExercices as $courseExercice) {
                $orderExercices [] = $courseExercice['exercice_id'];
            }
        }
        //find locked exercices
        $unlockedDocuments = [];
        for ($i = 0; $i < count($orderExercices); $i++) {
            if ($i > 0) {
                $sql = "SELECT * FROM user_exercice WHERE user_id =" . $user->getId() . " AND is_correct = 1 AND exercice_id = " . $orderExercices[$i - 1];
                $qb = $em->getConnection()->prepare($sql);
                $qb->execute();
                $unlocked = $qb->fetch();
//                $unlocked = $em->getRepository(UserExercice::class)->findOneBy(['exercice' => $orderExercices[$i - 1], 'user' => $user, 'is_correct' => 1]);
                if ($unlocked) {
                    $sql = "SELECT etd.*,td.*
                            FROM technical_document as td
                            LEFT JOIN exercice_technical_document as etd  on td.id = etd.technical_document_id
                            WHERE etd.exercice_id = " . $orderExercices[$i];
                    $qb = $em->getConnection()->prepare($sql);
                    $qb->execute();
                    $file = $qb->fetch();
                    if($file) {
                        $unlockedDocuments [] = $file;
                    }
                }
            }
        }
        return  $unlockedDocuments;
    }

}
