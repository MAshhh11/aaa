<?php

namespace App\Controller\Admin;

use App\Entity\Exercice;
use App\Entity\ExerciceFile;
use App\Form\ExerciceType;
use App\Service\FileUploader;
use App\Service\Tool;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



/**
 * @Route("espace-etudiant/admin/exercices")
 * @Security("is_granted('ROLE_ADMIN')")
 */
class ExerciceController extends AbstractController
{
    /**
     * @Route("/", name="exercice_index")
     */
    public function index()
    {

        return $this->render('admin/exercice/index.html.twig', [
            'controller_name' => 'ExerciceController',
        ]);
    }

    /**
     * @Route("/donnees", name="exercice_datas")
     */
    public function datasAction(Request $request, Tool $tool)
    {
        $em = $this->getDoctrine()->getManager();

        $sorts = array(
            'e.title',
            'e.created_at'
        );

        $sql = "SELECT e.*
            FROM exercice as e
            WHERE e.id > 0 ";

        $records = $tool->getScriptTable($sql, $sorts, $em); // SCRIPT PHP NON MODIFIABLE  DE REQUETES POUR RESULTATS TABLEAU DATATABLE JSON

        foreach ($records['results'] as $result):

            $result['created_at'] = new \DateTime($result['created_at']);
            $result['created_at'] = $result['created_at']->format('d/m/Y');


            $row = array(
                $result['title'],
                $result['created_at'],
            );

            $actions = '<div class="md-btn-group">';
            $actions .= '<a href="'.$this->generateUrl('exercice_form', array('id'=>$result['id'])).'" class="btn btn-icon-only btn-primary btn-sm" data-toggle="tooltip" data-original-title="Modifier"><i class="fas fa-edit"></i></a>';

            $tokenProvider = $this->container->get('security.csrf.token_manager');
            $token = $tokenProvider->getToken('delete'.$result['id'])->getValue();

            $actions .= '<a href="javascript:void(0);" class="btn btn-sm btn-icon-only btn-danger confirmDeleteBox" data-message="Souhaitez-vous supprimer définitivement cet exercice ?<br/> Toutes les données rattachées à cet exercice seront automatiquement supprimées."
                            data-token="'.$token.'" data-url="'.$this->generateUrl('exercice_delete', array('id'=>$result['id'])).'" data-toggle="tooltip" data-original-title="Suppression"><i class="fas fa-trash"></i></a>';

            $actions .= '</div>';
            $row[] = $actions;

            $records["aaData"][] = $row;

        endforeach;

        return new response(json_encode($records));
    }

    /**
     * @Route("/formulaire/{id}", requirements={}, name="exercice_form")
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
            $item = $em->getRepository(Exercice::class)->find($id);
        } else {
            $item = new Exercice();
        }

        $attachments = $em->getRepository(ExerciceFile::class)->findBy(['exercice_id' => $id]);

        $form = $this->createForm(ExerciceType::class, $item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if($id) {
                $session->getFlashBag()->add('success', "L'exercice a bien été modifié");
            } else {
                $session->getFlashBag()->add('success', "L'exercice a bien été créé");
            }
            $item = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($item);
            $entityManager->flush();


            $dir = $this->getParameter('kernel.project_dir').'/uploads/exercices/exercice_'.$item->getId()."/";

            if(!is_dir($dir)){
                mkdir($dir,0755, true);
            }


            if($_FILES && $_FILES['files']) {
                $v = 0;
                foreach($_FILES['files']['size'] as $k => $filesize) {
                    if($filesize > 0) {
                        $fileType = $_POST['select'][$v];
                        if(file_exists($dir.$_FILES['files']['name'][$k])) {
                            $filename = uniqid().$_FILES['files']['name'][$k];
                        } else {
                            $filename = $_FILES['files']['name'][$k];
                        }
                        if(move_uploaded_file($_FILES['files']['tmp_name'][$k], $dir.$filename)) {
                            $newFile = new ExerciceFile();
                            if($fileType == "presentation") {
                                $newFile->setIsPresentation(1);
                                $newFile->setIsTechnicalDocument(0);
                            } elseif($fileType == "exercice") {
                                $newFile->setIsPresentation(0);
                                $newFile->setIsTechnicalDocument(0);
                            }
                            $newFile->setfile($filename);
                            $newFile->setExerciceId($item->getId());
                            $newFile->setfilename($filename);
                            $entityManager->persist($newFile);
                            $entityManager->flush();
                        }
                        $v++;
                    }

                }
            }

            if($request->request->get('remove_attachments')) {
                foreach($request->request->get('remove_attachments') as $attachmentRemove) {
                    if($attachmentRemove) {
                        $attachmentRemoved = $em->getRepository(ExerciceFile::class)->find($attachmentRemove);
                        unlink($dir.$attachmentRemoved->getFile());
                        $entityManager->remove($attachmentRemoved);
                        $entityManager->flush();
                    }
                }
            }


            return $this->redirectToRoute('exercice_form', array('id'=>$item->getId()));
        }

        return $this->render('admin/exercice/form.html.twig', array(
            'item' => $item,
            'attachments' => $attachments,
            'form' => $form->createView(),
        ));
    }


    /**
     * @Route("/suppression/{id}", name="exercice_delete", methods="DELETE")
     * @param Request $request
     * @param Exercice $exercice
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function delete(Request $request, Exercice $exercice)
    {
        $session = $this->get('session');
        if ($this->isCsrfTokenValid('delete'.$exercice->getId(), $request->request->get('_token'))) {

            $em = $this->getDoctrine()->getManager();
            $em->remove($exercice);
            $em->flush();
            $session->getFlashBag()->add('success', "La suppression a bien été effectuée");

        } else {
            $session->getFlashBag()->add('error', "Erreur !");
        }

        return $this->redirectToRoute('exercice_index',[]);
    }

    /**
     * @Route("/telecharger/{id}/{filename}", name="download_file_admin_exo")
     * @param $id
     * @param $filename
     */
    public function downloadAction($id, $filename)
    {
        $em = $this->getDoctrine()->getManager();
        $item = $em->getRepository(ExerciceFile::class)->findOneBy(array('exercice_id' => $id, 'file' => $filename));
        $file = $this->getParameter('kernel.project_dir').'/uploads/exercices/exercice_'.$item->getExerciceId().'/'.$item->getFile();

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
