<?php

namespace App\Controller\Student;

use App\Entity\Course;
use App\Entity\CourseFile;
use App\Entity\Exercice;
use App\Entity\ExerciceFile;
use App\Entity\Formation;
use App\Entity\User;
use App\Entity\UserExercice;
use App\Form\CourseType;
use App\Form\ExerciceType;
use App\Service\FileUploader;
use App\Service\Tool;
use Proxies\__CG__\App\Entity\CourseExercice;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



/**
 * @Route("/espace-etudiant/ma-formation")
 * @Security("is_granted('ROLE_USER')")
 *
 */
class CourseController extends AbstractController
{
    /**
     * @Route("/{id}", name="student_course_index")
     * @param $id
     * @return Response
     */
    public function index($id)
    {
        $em = $this->getDoctrine();
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $sql = "SELECT f.*
            FROM formation_user as uf
            LEFT JOIN formation as f on f.id = uf.formation_id
            WHERE uf.user_id = " . $user->getId() . " AND uf.formation_id = " .$id;

        $qb = $em->getConnection()->prepare($sql);
        $qb->execute();
        $formation = $qb->fetch();

        if(!$formation) {
            $formation = null;
            return $this->render('student/course/index.html.twig', [ 'formation' => $formation]);
        } else {
            $sql = "SELECT f.title, c.*, fc.rank
            FROM  formation as f
            LEFT JOIN course_formation as fc on fc.formation_id = f.id
            LEFT JOIN course as c on fc.course_id = c.id
            WHERE f.id = " . $formation['id'] . " ORDER BY fc.rank";

            $qb = $em->getConnection()->prepare($sql);
            $qb->execute();
            $courses = $qb->fetchAll();

            $orderExercices = [];
            $exercices = [];
            foreach ($courses as $course) {
                $sql = "SELECT ce.course_id, e.*, ce.rank, ce.exercice_id FROM course as c
                    LEFT JOIN course_exercice as ce on c.id = ce.course_id
                    LEFT JOIN exercice as e on ce.exercice_id = e.id
                    WHERE c.id = " . $course['id'] . " ORDER BY ce.rank";

                $qb = $em->getConnection()->prepare($sql);
                $qb->execute();
                $courseExercices = $qb->fetchAll();
                $exercices = array_merge($exercices, $courseExercices);

                foreach ($courseExercices as $courseExercice) {
                    $orderExercices [] = $courseExercice['exercice_id'];
                }
            }

            //count for progress bar
            $nbExercices = count($exercices);
            $exercicesDone = [];
            foreach ($exercices as $exercice) {
                $done = $em->getRepository(UserExercice::class)->findOneBy(['exercice' => $exercice['id'], 'user' => $user, 'is_correct' => 1]);
                if ($done) {
                    $exercicesDone [] = $done->getExercice()->getId();
                }
            }
            $progress = (count($exercicesDone) / $nbExercices) * 100;

            //find locked exercices
            $lockedExercices = [];
            for ($i = 0; $i < count($orderExercices); $i++) {
                if ($i > 0) {
                    $unlocked = $em->getRepository(UserExercice::class)->findOneBy(['exercice' => $orderExercices[$i - 1], 'user' => $user, 'is_correct' => 1]);
                    if (!$unlocked) {
                        $lockedExercices [] = $orderExercices[$i];
                    }
                }
            }
        }

        return $this->render('student/course/index.html.twig', [
            'formation' => $formation,
            'courses' => $courses,
            'exercices' => $exercices,
            'progress' => $progress,
            'lockedExercices' => $lockedExercices,
            'exercicesDone' => $exercicesDone,
            'orderExercices' => $orderExercices
        ]);
    }

    /**
     * @Route("/{id}", name="student_exercice")
     */
    public function exercice($id)
    {
        $em = $this->getDoctrine();
        $exercice = $em->getRepository(Exercice::class)->find($id);

        return $this->render('student/exercice/index.html.twig', [
            'exercice' => $exercice,
        ]);
    }

}
