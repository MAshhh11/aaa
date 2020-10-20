<?php

namespace App\Controller\Admin;

use App\Entity\Exercice;
use App\Entity\ExerciceFile;
use App\Entity\ExerciceTechnicalDocument;
use App\Entity\FormationUser;
use App\Entity\Formation;
use App\Entity\TechnicalDocument;
use App\Entity\User;
use App\Entity\UserExercice;
use App\Entity\UserExerciceComment;
use App\Form\ExerciceType;
use App\Service\FileUploader;
use App\Service\Tool;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @Route("/espace-etudiant/admin/corrections")
 * @Security("is_granted('ROLE_ADMIN')")
 */

class CorrectionController extends AbstractController
{
    /**
     * @Route("/", name="correction_index")
     */
    public function index()
    {        
        return $this->render('admin/correction/index.html.twig', array());
    }

    /**
     * @Route("/donnees", name="correction_datas")
     */
    public function datasAction(Request $request, Tool $tool)
    {
        $em = $this->getDoctrine()->getManager();

        $sorts = array(
            'u.firstname',
            'u.lastname',
            'e.title',
            'ue.created_at',
        );


        $sql = "SELECT u.*, e.title, ue.updated_at, ue.exercice_id, ue.user_id
        FROM user as u
        LEFT JOIN user_exercice as ue on u.id = ue.user_id
        LEFT JOIN exercice as e on ue.exercice_id = e.id
        WHERE (ue.is_correct = 0 OR ue.is_correct IS NULL) AND ue.is_sent = 1";



        $records = $tool->getScriptTable($sql, $sorts, $em); // SCRIPT PHP NON MODIFIABLE  DE REQUETES POUR RESULTATS TABLEAU DATATABLE JSON

        foreach ($records['results'] as $result):

            $result['updated_at'] = new \DateTime($result['updated_at']);
            $result['updated_at'] = $result['updated_at']->format('d/m/Y');


            $row = array(
                $result['firstname'],
                $result['lastname'],
                $result['title'],
                $result['updated_at'],
            );

            $actions = '<div class="md-btn-group">';
            $actions .= '<a href="'.$this->generateUrl('correct_exercice_form', array('id'=>$result['exercice_id'], 'student' => $result['user_id'])).'" class="btn btn-icon-only btn-primary btn-sm" data-toggle="tooltip" data-original-title="Corriger"><i class="fas fa-edit"></i></a>';

            $actions .= '</div>';
            $row[] = $actions;

            $records["aaData"][] = $row;

        endforeach;

        return new response(json_encode($records));
    }

    /**
     * @Route("/exercice/{id}/{student}", requirements={}, name="correct_exercice_form")
     * @param Request $request
     * @param $id
     * @param User $student
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function form(Request $request, $id, User $student)
    {
        $em = $this->getDoctrine();
        $session = $this->get('session');
        $user = $this->get('security.token_storage')->getToken()->getUser();


        //all files
        $exercice = $em->getRepository(Exercice::class)->find($id);
        $files = $em->getRepository(ExerciceFile::class)->findBy(['exercice_id' => $exercice->getId()]);
        $ExerciceTechnicalDocuments = $em->getRepository(ExerciceTechnicalDocument::class)->findBy(['exercice' => $exercice->getId()]);
        $technicalDocuments = [];
        foreach ($ExerciceTechnicalDocuments as $document) {
            $technicalDocument = $em->getRepository(TechnicalDocument::class)->find($document->getTechnicalDocument()->getId());
            $technicalDocuments [] = $technicalDocument;
        }

        //comment section
        $userExercice = $em->getRepository(UserExercice::class)->findOneBy(['user' => $student, 'exercice' => $exercice]);

        $comments = $em->getRepository(UserExerciceComment::class)->findBy(['user_exercice' => $userExercice]);

        //seen comments save
        foreach ($comments as $comment){
            if($user->getId() != $comment->getUser()->getId()){
                $comment->setIsSeen(1);
                $em->getManager()->persist($comment);
            }
        }
        $em->getManager()->flush();


        //check if exercice already done and correct
        $alreadySent = $em->getRepository(UserExercice::class)->findOneBy(['user' => $student, 'exercice' => $exercice, 'is_sent' => 1]);

        return $this->render('admin/correction/form.html.twig', [
            'exercice' => $exercice,
            'files' => $files,
            'technicalDocuments' => $technicalDocuments,
            'alreadySent' => $alreadySent,
            'comments' => $comments,
            'student' => $student,
            'userExercice' => $userExercice,
            'currentUser' => $user
        ]);
    }


    /**
     * @Route("/exercice/valider", name="validate_exercice")
     * @param Request $request
     * @param \Swift_Mailer $mailer
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function validateExercice(Request $request, \Swift_Mailer $mailer)
    {
        $em = $this->getDoctrine();
        $exerciceId = $request->request->get('exercice');
        $student = $request->request->get('student');
        $validation = $request->request->get('validation');

        $userExercice = $em->getRepository(UserExercice::class)->findOneBy(['exercice' => $exerciceId, 'user' => $student ]);
        $userExercice->setIsCorrect($validation);
        $userExercice->setUpdatedAt(new \DateTime());
        $em->getManager()->persist($userExercice);
        $em->getManager()->flush();

        $student = $em->getRepository(User::class)->find($student);

        $order = $this->getOrderExercices($student);
        $last = end($order['order']);

        $em = $this->getDoctrine();

            $sql = "SELECT f.*
            FROM formation_user as uf
            LEFT JOIN formation as f on f.id = uf.formation_id
            WHERE uf.is_current = 1 AND uf.user_id = " .$student->getId();

            $qb = $em->getConnection()->prepare($sql);
            $qb->execute();
            $formation = $qb->fetch();
        
        if($last == $exerciceId && $validation) {
            
            $userFormation = $em->getRepository(FormationUser::class)->findOneBy(['user' => $student, 'is_current' => 1]);
            $userFormation->setIsDone(1);
            $userFormation->setIsCurrent(0);
            $em->getManager()->persist($userFormation);
            $em->getManager()->flush();

            //Notification de fin de formation à l'étudiant

            if (filter_var($student->getEmail(), FILTER_VALIDATE_EMAIL)) {
                
                $message = (new \Swift_Message())
                    ->setSubject('Fin de Formation' . $formation['title'])
                    ->setFrom(array($_ENV['MAILER_ADDRESS'] => $_ENV['MAILER_NAME']))
                    ->setTo($student->getEmail())
                    ->setContentType('text/html')
                    ->setBody($this->renderView('emails/end_formation.html.twig', array('formation' => $formation, 'validation' => $validation)));

                    //Notification de fin de formation au professeur

                    if ($mailer->send($message)) {
                        // dump($student); exit;
                        
                        $messageEndFormation = (new \Swift_Message())
                        // Give the message a subject
                        // 3aanim@gmail.com
                        ->setSubject('Un élève a terminé sa formation')
                        ->setFrom('noreply@aaanim.fr')
                        ->setTo('3aanim@gmail.com')
                        ->setBody(
                          $this->renderView(
                              'emails/student_end_formation.html.twig',
                              [ 'user' => $student,
                                'firstname' => $student->getFirstName(),
                              'lastname' => $student->getLastName(),
                              'email' => $student->getEmail()
                            ]
                          ),
                          'text/html'
                        );
          
                        $mailer->send($messageEndFormation);
                      }
            }
            
        } else {

            //Notification de fin d'exercice à l'étudiant

            $exercice = $em->getRepository(Exercice::class)->find($exerciceId);
            if (filter_var($student->getEmail(), FILTER_VALIDATE_EMAIL)) {
                $message = (new \Swift_Message())
                    ->setSubject('Validation Exercice' . $exercice->getTitle())
                    ->setFrom(array($_ENV['MAILER_ADDRESS'] => $_ENV['MAILER_NAME']))
                    ->setTo($student->getEmail())
                    ->setContentType('text/html')
                    ->setBody($this->renderView('emails/validate_exercice.html.twig', array('exercice' => $exercice, 'validation' => $validation)));
                $mailer->send($message);
            }
            
        }
        if($validation) {
            return new Response("ok");
        } else {
            return new Response("renvoyer");
        }

    }

    private function getOrderExercices($user)
    {
        $em = $this->getDoctrine();

        $sql = "SELECT f.*
            FROM formation_user as uf
            LEFT JOIN formation as f on f.id = uf.formation_id
            WHERE uf.is_current = 1 AND uf.user_id = " .$user->getId();

        $qb = $em->getConnection()->prepare($sql);
        $qb->execute();
        $formation = $qb->fetch();
        

        $sql = "SELECT f.title, c.*, fc.rank
            FROM  formation as f
            LEFT JOIN course_formation as fc on fc.formation_id = f.id
            LEFT JOIN course as c on fc.course_id = c.id
            WHERE f.id = ". $formation['id'] . " ORDER BY fc.rank";

        $qb = $em->getConnection()->prepare($sql);
        $qb->execute();
        $courses = $qb->fetchAll();

        $orderExercices = [];
        $exercices = [];
        foreach ($courses as $course){
            $sql = "SELECT ce.course_id, e.*, ce.rank, ce.exercice_id FROM course as c
                    LEFT JOIN course_exercice as ce on c.id = ce.course_id
                    LEFT JOIN exercice as e on ce.exercice_id = e.id
                    WHERE c.id = ". $course['id'] . " ORDER BY ce.rank";

            $qb = $em->getConnection()->prepare($sql);
            $qb->execute();
            $courseExercices = $qb->fetchAll();
            $exercices = array_merge($exercices, $courseExercices);

            foreach ($courseExercices as $courseExercice) {
                $orderExercices []= $courseExercice['exercice_id'];
            }
        }
        //find locked exercices
        $lockedExercices = [];
        for($i = 0; $i < count($orderExercices); $i++){
            if($i > 0){
                $unlocked = $em->getRepository(UserExercice::class)->findOneBy(['exercice' => $orderExercices[$i-1], 'user' => $user, 'is_correct' => 1]);
                if(!$unlocked){
                    $lockedExercices []= $orderExercices[$i];
                }
            }
        }

        return [
            'order' => $orderExercices,
            'locked' => $lockedExercices
        ];
    }

}
