<?php

namespace App\Controller\Admin;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use App\Service\Tool;

use App\Entity\DataRole;

/**
 * @Route("/admin/switch")
 * @Security("is_granted('ROLE_ALLOWED_TO_SWITCH')")
 */

class SwitchController extends AbstractController
{
    /**
     * @Route("/", name="switch_home")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $roles = $em->getRepository(DataRole::class)->findBy(array(), array('name' => 'ASC'));
        
        return $this->render('admin/switch/index.html.twig', array(
            "roles" => $roles
        ));
    }
    
    /**
     * @Route("/donnees", name="switch_datas")
     */
    public function switchDatasAction(Request $request, Tool $tool)
    {
        $em = $this->getDoctrine()->getManager(); 
        
        $sorts = array(
            'u.lastname',
            'u.firstname',
            'u.roles',
        );
        
        $sql = "SELECT u.* 
            FROM user as u 
            WHERE u.id > 0 ";
        
        $records = $tool->getScriptTable($sql, $sorts, $em); // SCRIPT PHP NON MODIFIABLE  DE REQUETES POUR RESULTATS TABLEAU DATATABLE JSON 

        foreach ($records['results'] as $result):
            
            $roles = str_replace('"', "", $result['roles']);
            $roles = str_replace('[', "", $roles);
            $roles = str_replace(']', "", $roles);

            $row = array(
                $result['lastname'],
                $result['firstname'],
                $roles,
            );

            $actions = '<div class="md-btn-group">';
            $actions .= '<a href="'.$this->generateUrl('dashboard_home', array('_switch_user'=>$result['email'])).'" class="btn btn-icon-only btn-primary btn-sm" data-toggle="tooltip" data-original-title="Switcher"><i class="fas fa-user-friends"></i></a>';       
            $actions .= '</div>';
            $row[] = $actions;
            
            $records["aaData"][] = $row;

        endforeach;

        return new response(json_encode($records));
    }
    
}
