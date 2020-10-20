<?php

namespace App\Controller\Student;

use App\Entity\Course;
use App\Entity\CourseFile;
use App\Entity\Exercice;
use App\Entity\ExerciceFile;
use App\Entity\ExerciceTechnicalDocument;
use App\Entity\Formation;
use App\Entity\TechnicalDocument;
use App\Entity\User;
use App\Entity\UserExercice;
use App\Entity\UserExerciceComment;
use App\Form\CourseType;
use App\Form\ExerciceType;
use App\Form\VideoType;
use App\Service\FileUploader;
use App\Service\Tool;
use Proxies\__CG__\App\Entity\CourseExercice;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\Routing\Annotation\Route;



/**
 * @Route("/espace-etudiant/exercices")
 * @Security("is_granted('ROLE_USER')")
 */
class ExerciceController extends AbstractController
{
    /**
     * @Route("/exercice/{id}", name="student_exercice")
     * @param $id
     * @param Request $request
     * @return Response
     */
    public function exercice($id)
    {
        $em = $this->getDoctrine();
        $user = $this->get('security.token_storage')->getToken()->getUser();

        // if(!$this->isGranted('ROLE_ADMIN')) {
        //     $session = $this->get('session');
        //     $order = $this->getOrderExercices($user);
        //     $locked =  $order['locked'];
        //     if(in_array($id, $locked)) {
        //         $session->getFlashBag()->add('error', "Vous ne pouvez pas encore accéder à cet exercice");
        //         return $this->redirectToRoute('dashboard_home');
        //     }
        // }

        //all files
        $exercice = $em->getRepository(Exercice::class)->find($id);
        $files = $em->getRepository(ExerciceFile::class)->findBy(['exercice_id' => $exercice->getId()]);
        $ExerciceTechnicalDocuments = $em->getRepository(ExerciceTechnicalDocument::class)->findBy(['exercice' => $exercice->getId()]);
        $technicalDocuments = [];
        foreach ($ExerciceTechnicalDocuments as $document){
            $technicalDocument = $em->getRepository(TechnicalDocument::class)->find($document->getTechnicalDocument()->getId());
            $technicalDocuments []= $technicalDocument;
        }

        //comment section
        $userExercice = $em->getRepository(UserExercice::class)->findOneBy(['user' => $user, 'exercice' => $exercice]);
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
        $alreadySent = $em->getRepository(UserExercice::class)->findOneBy(['user' => $user, 'exercice' => $exercice, 'is_sent' => 1]);

        //Formation is current or not
        $em = $this->getDoctrine();

        $sql = "SELECT f.*
            FROM formation_user as uf
            LEFT JOIN formation as f on f.id = uf.formation_id
            WHERE uf.is_current = 1 AND uf.user_id = " .$user->getId();

        $qb = $em->getConnection()->prepare($sql);
        $qb->execute();
        $formation = $qb->fetch();
        

        if($formation == true){
            //get exercices order
            $orderExercices = $this->getOrderExercices($user);
            $locked = $orderExercices['locked'];
            $order = $orderExercices['order'];
    
            foreach ($order as $key => $value){
                if($value ==  $exercice->getId()){
                    $nextKey = $key + 1;
                    $previousKey = $key - 1;
                    if($nextKey < count($order)) {
                        $next = $order[$nextKey];
                    } else {
                        $next = $order[$key];
                    }
                    if($previousKey > 0) {
                        $previous = $order[$previousKey];
                    } else {
                        $previous = $order[$key];
                    }
                }
            }
            
            if(!$this->isGranted('ROLE_ADMIN')) {
                $session = $this->get('session');
                $order = $this->getOrderExercices($user);
                $locked =  $order['locked'];
                if(in_array($id, $locked)) {
                    $session->getFlashBag()->add('error', "Vous ne pouvez pas encore accéder à cet exercice");
                    return $this->redirectToRoute('dashboard_home');
                }
            }
        }else{
            $order = 0;
            $locked = 0;
            $next = 0;
            $previous = 0;
        }


        return $this->render('student/exercice/index.html.twig', [
            'exercice' => $exercice,
            'files' => $files,
            'technicalDocuments' => $technicalDocuments,
            'alreadySent' => $alreadySent,
            'comments' => $comments,
            'currentUser' => $user,
            'order' => $order,
            'locked' => $locked,
            'next' => $next,
            'previous' => $previous
        ]);
    }

    /**
     * @Route("/envoyer", name="submit_exercice", methods="POST")
     * @param Request $request
     * @param Exercice $exercice
     * @param \Swift_Mailer $mailer
     * @return void
     */
    public function submitExercice(Request $request, \Swift_Mailer $mailer)
    {
        $em = $this->getDoctrine();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $exercice = $em->getRepository(Exercice::class)->find($request->request->get('exercice'));

        $item = $em->getRepository(UserExercice::class)->findOneBy(['exercice' => $request->request->get('exercice'), 'user' => $user]);
        $session = $this->get('session');

        if(!$item) {
            $item = new UserExercice();
        }


        $now = new \DateTime();
        $item->setUser($user);
        $item->setExercice($exercice);
        $item->setIsSent(1);
        $item->setCreatedAt($now);
        $item->setUpdatedAt($now);
        $em->getManager()->persist($item);
        $em->getManager()->flush();

        $dir = $this->getParameter('kernel.project_dir').'/uploads/student_exercice/'.$item->getId().'/';
        

        if(!is_dir($dir)){
            mkdir($dir,0755, true);
        }

        if($_FILES && $_FILES['video_file']) {
            if($_FILES['video_file']['size'] > 0) {
                if(file_exists($dir.$_FILES['video_file']['name'])) {
                    $filename = uniqid().$_FILES['video_file']['name'];
                } else {
                    $filename = $_FILES['video_file']['name'];
                }
                if(move_uploaded_file($_FILES['video_file']['tmp_name'], $dir.$filename)) {
                    $item->setFile($filename);
                    $em->getManager()->persist($item);
                    $em->getManager()->flush();
                }
            }
        }




        if (filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $message = (new \Swift_Message())
                ->setSubject('Dépot exercice' . $exercice->getTitle())
                ->setFrom(array($_ENV['MAILER_ADDRESS'] => $_ENV['MAILER_NAME']))
                ->setTo($user->getEmail())
                ->setContentType('text/html')
                ->setBody($this->renderView('emails/submit_exercice.html.twig', array('item' => $item, 'exercice' => $exercice, 'isAdmin' => false)));
            $mailer->send($message);

            $message = (new \Swift_Message())
                ->setSubject('Dépot exercice' . $exercice->getTitle())
                ->setFrom(array($_ENV['MAILER_ADDRESS'] => $_ENV['MAILER_NAME']))
                ->setTo($_ENV['MAILER_ADDRESS'])
                ->setContentType('text/html')
                ->setBody($this->renderView('emails/submit_exercice.html.twig', array('item' => $item, 'user' => $user, 'exercice' => $exercice, 'isAdmin' => true)));
            $mailer->send($message);


        } else {
            $session->getFlashBag()->add('error', "Impossible d'envoyer un e-mail sur : ".$user->getEmail().", L'adresse est erronée.");
        }

        $session = $this->get('session');
        $session->getFlashBag()->add('success', "L'exercice a bien été envoyé !");

        return $this->redirectToRoute('student_exercice', ['id' => $exercice->getId()]);
    }

    /**
     * @Route("/commentaire/enregistrer", name="save_comment")
     * @param Request $request
     * @param \Swift_Mailer $mailer
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function saveComment(Request $request, \Swift_Mailer $mailer)
    {
        $em = $this->getDoctrine();
        $userPosting = $this->get('security.token_storage')->getToken()->getUser();
        $message = $request->request->get('message');
        $exerciceId = $request->request->get('exercice');


        if($request->request->get('student')) {
            $student = $em->getRepository(User::class)->find($request->request->get('student'));
        } else {
            $student = $userPosting;
        }

        $exercice = $em->getRepository(Exercice::class)->find($exerciceId);
        $userExercice = $em->getRepository(UserExercice::class)->findOneBy(['exercice' => $exerciceId, 'user' => $student ]);

        //create userExercice if doesnt exist because
        if(!$userExercice) {
            $userExercice = new UserExercice();
            $userExercice->setUser($student);
            $userExercice->setExercice($exercice);
            $userExercice->setIsSent(0);
            $userExercice->setCreatedAt(new \DateTime());
            $userExercice->setUpdatedAt(new \DateTime());
            $em->getManager()->persist($userExercice);
        }


        $comment = new UserExerciceComment();
        $comment->setUser($userPosting);
        $comment->setCreatedAt(new \DateTime());
        $comment->setComment($message);
        $comment->setUserExercice($userExercice);
        $em->getManager()->persist($comment);
        $em->getManager()->flush();


        if(!$request->request->get('student')) {
            $sendTo = $_ENV['MAILER_ADDRESS'];
            $isAdmin = true;
        } else {
            $sendTo = $userPosting->getEmail();
            $isAdmin = false;
        }

        if (filter_var($sendTo, FILTER_VALIDATE_EMAIL)) {
            $message = (new \Swift_Message())
                ->setSubject('Envoi d\'un message sur votre espace')
                ->setFrom(array($_ENV['MAILER_ADDRESS'] => $_ENV['MAILER_NAME']))
                ->setTo($sendTo)
                ->setContentType('text/html')
                ->setBody($this->renderView('emails/message_notification.html.twig', array('student' => $student, 'isAdmin' => $isAdmin, 'exercice' => $exercice)));
            $mailer->send($message);
        }


        return new Response("ok");
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

    /**
     * @Route("/test/{id}/{filename}", name="download_file")
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

    /**
     * @Route("/show", name="show_file", methods="POST")
     * @param Request $request
     * @return string
     */
    public function ShowDocument(Request $request)
    {
        $id = $request->get('id');
        $filename = $request->get('filename');
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
            header("Content-Type: application/pdf");
            header('Content-Disposition: attachment; filename="' . $item->getFile() . '"');
            header('Content-Transfer-Encoding: binary');
            header("Content-Length: " . $size);
            readfile($file);
        }
        return chunk_split(base64_encode(file_get_contents($file)));
    }

}
