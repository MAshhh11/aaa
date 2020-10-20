<?php

namespace App\Controller\Admin;

use App\Entity\Exercice;
use App\Entity\ExerciceFile;
use App\Entity\ExerciceTechnicalDocument;
use App\Entity\TechnicalDocument;
use App\Entity\User;
use App\Entity\UserExercice;
use App\Entity\UserExerciceComment;
use App\Form\ExerciceType;
use App\Service\FileUploader;
use App\Service\Tool;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @Route("/espace-etudiant/messages")
 */

class MessageController extends AbstractController
{
    /**
     * @Route("/", name="message_index")
     */
    public function index()
    {        
        return $this->render('admin/correction/index_messages.html.twig');

    }

    /**
     * @Route("/donnees", name="message_datas")
     * @param Request $request
     * @param Tool $tool
     * @return Response
     * @throws \Exception
     */
    public function datasAction(Request $request, Tool $tool)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser(); 

        $sorts = array(
            'u.firstname',
            'u.lastname',
            'uec.title',
            'uec.comment',
            'uec.created_at',
        );

        if($this->isGranted('ROLE_ADMIN')) {
            $sql = "SELECT u.firstname, u.lastname, uec.*, ue.exercice_id, e.title, ue.user_id
                FROM user as u
                LEFT JOIN user_exercice_comment as uec on u.id = uec.user_id 
                LEFT JOIN user_exercice as ue on uec.user_exercice_id = ue.id
                LEFT JOIN exercice as e on ue.exercice_id = e.id
                WHERE u.id != " . $user->getId() . " AND ue.user_id IS NOT NULL AND (uec.is_seen = 0 OR uec.is_seen IS NULL)";
        } else {
            $sql = "SELECT u.firstname, u.lastname, uec.*, ue.exercice_id, e.title, ue.user_id
                FROM user as u
                LEFT JOIN user_exercice_comment as uec on u.id = uec.user_id 
                LEFT JOIN user_exercice as ue on uec.user_exercice_id = ue.id
                LEFT JOIN exercice as e on ue.exercice_id = e.id
                WHERE u.id != " . $user->getId() . " AND ue.user_id = " .$user->getId() ." AND (uec.is_seen = 0 OR uec.is_seen IS NULL)";
        }


        $records = $tool->getScriptTable($sql, $sorts, $em); // SCRIPT PHP NON MODIFIABLE  DE REQUETES POUR RESULTATS TABLEAU DATATABLE JSON
        foreach ($records['results'] as $result):

            $result['created_at'] = new \DateTime($result['created_at']);
            $result['created_at'] = $result['created_at']->format('d/m/Y');


            $row = array(
                $result['firstname'],
                $result['lastname'],
                $result['title'],
                $result['comment'],
                $result['created_at'],
            );

            $actions = '<div class="md-btn-group">';
            if($this->isGranted('ROLE_ADMIN')) {
                $actions .= '<a href="' . $this->generateUrl('correct_exercice_form', array('id' => $result['exercice_id'], 'student' => $result['user_id'])) . '" class="btn btn-icon-only btn-primary btn-sm" data-toggle="tooltip" data-original-title="voir"><i class="fas fa-eye"></i></a>';
            } else {
                $actions .= '<a href="' . $this->generateUrl('student_exercice', array('id' => $result['exercice_id'])) . '" class="btn btn-icon-only btn-primary btn-sm" data-toggle="tooltip" data-original-title="voir"><i class="fas fa-eye"></i></a>';

            }
            $actions .= '</div>';
            $row[] = $actions;

            $records["aaData"][] = $row;

        endforeach;

        return new response(json_encode($records));
    }
}
