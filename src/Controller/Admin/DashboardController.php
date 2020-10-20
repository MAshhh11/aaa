<?php

namespace App\Controller\Admin;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @Route("/espace-etudiant")
 */

class DashboardController extends AbstractController
{
    /**
     * @Route("/", name="dashboard_home")
     */
    public function index(UserInterface $user)
    {
       
        $em = $this->getDoctrine();
        //nb of exercices to correct
        $sql = "SELECT COUNT(ue.exercice_id)
            FROM user as u
            LEFT JOIN user_exercice as ue on u.id = ue.user_id
            LEFT JOIN exercice as e on ue.exercice_id = e.id
            WHERE (ue.is_correct = 0 OR ue.is_correct IS NULL) AND ue.is_sent = 1";
        $qb =$em->getConnection()->prepare($sql);
        $qb->execute();
        $exercicesCount = $qb->fetch();
        $exercicesCount = $exercicesCount['COUNT(ue.exercice_id)'];

        //nb of messages to read
        if($this->isGranted('ROLE_ADMIN')){
            $sql = "SELECT COUNT(u.id)
                FROM user as u
                LEFT JOIN user_exercice_comment as uec on u.id = uec.user_id 
                LEFT JOIN user_exercice as ue on uec.user_exercice_id = ue.id
                LEFT JOIN exercice as e on ue.exercice_id = e.id
                WHERE u.id != " . $user->getId() . " AND ue.user_id IS NOT NULL AND (uec.is_seen = 0 OR uec.is_seen IS NULL)";
        } else {
            $sql = "SELECT COUNT(u.id)
                FROM user as u
                LEFT JOIN user_exercice_comment as uec on u.id = uec.user_id 
                LEFT JOIN user_exercice as ue on uec.user_exercice_id = ue.id
                LEFT JOIN exercice as e on ue.exercice_id = e.id
                WHERE u.id != " . $user->getId() . " AND ue.user_id = " .$user->getId() . " AND (uec.is_seen = 0 OR uec.is_seen IS NULL)";
        }

        $qb =$em->getConnection()->prepare($sql);
        $qb->execute();
        $messagesCount = $qb->fetch();
        $messagesCount = $messagesCount['COUNT(u.id)'];

        //nb students in formation
        $sql = "SELECT COUNT(u.id)
                FROM user as u
                LEFT JOIN formation_user as uf on uf.user_id = u.id
                WHERE uf.is_current = 1";

        $qb =$em->getConnection()->prepare($sql);
        $qb->execute();
        $studentsCount = $qb->fetch();
        $studentsCount = $studentsCount['COUNT(u.id)'];

        //nb students
        $sql = "SELECT COUNT(u.id)
                FROM user as u
                WHERE u.roles NOT LIKE '%ADMIN%'";

        $qb =$em->getConnection()->prepare($sql);
        $qb->execute();
        $students = $qb->fetch();
        $students = $students['COUNT(u.id)'];

        //current student formation
        if ($this->isGranted('ROLE_USER') && !$this->isGranted('ROLE_ADMIN')) {
            $sql = "SELECT f.*
            FROM formation_user as uf
            LEFT JOIN formation as f on f.id = uf.formation_id
            WHERE uf.user_id = " . $user->getId() . " AND uf.is_current = 1";

            $qb = $em->getConnection()->prepare($sql);
            $qb->execute();
            $formation = $qb->fetch();
        } else {
            $formation = null;
        }



        return $this->render('admin/dashboard/index.html.twig', array(
            'exercicesCount' => $exercicesCount,
            'messagesCount' => $messagesCount,
            'studentsCount' => $studentsCount,
            'students' => $students,
            'formation' => $formation
            ));
    }
}
