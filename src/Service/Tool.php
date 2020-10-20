<?php

namespace App\Service;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use Doctrine\Common\Persistence\ManagerRegistry;

class Tool
{
    protected $em;
    private $container;

    public function __construct(ManagerRegistry $em, Container $container)
    {
        $this->em       = $em;
        $this->container= $container;
    }

    public function getName() {
        return 'Tool';
    }

    public function getScriptTable($sql,$sorts, $em, $groupBy = NULL) {

        $records = array();

        foreach($_REQUEST as $key => $value) {
            if(preg_match('#sSearch_([0-9]+)#is', $key, $out)) {
                if(isset($sorts[$out[1]]) && strlen($_REQUEST[$out[0]]) > 0) {
                    if($_REQUEST[$out[0]] == "NOT_NULL") {
                        $sql .= " AND " . $sorts[$out[1]]. " IS NOT NULL ";
                    } elseif($_REQUEST[$out[0]] == "IS_NULL") {
                        $sql .= " AND " . $sorts[$out[1]]. " IS NULL ";
                    } elseif($_REQUEST[$out[0]] == "NO_NEW") {
                        $sql .= " AND " . $sorts[$out[1]]. " = 0 ";
                    } elseif($_REQUEST[$out[0]] == "HAS_NEW") {
                        $sql .= " AND " . $sorts[$out[1]]. " > 0 ";
                    } else  {
                        $sql .= " AND " . $sorts[$out[1]]. " LIKE  '%". $_REQUEST[$out[0]] ."%' ";
                    }
                }
            }
        }

        $qb = $em->getConnection()->prepare($sql);
        $qb->execute();
        $counts = $qb->fetchAll();
        $iTotalRecords = count($counts);
        $totalDisplayed = intval($_REQUEST['iDisplayLength']);
        $iDisplayLength = $totalDisplayed < 0 ? $iTotalRecords : $totalDisplayed;
        $records["iTotalDisplayRecords"]  = $records["iTotalRecords"] = $iTotalRecords;

        if($groupBy) {
            $sql.= $groupBy;
        }

        $sql .= ' ORDER BY ' . $sorts[$_REQUEST['iSortCol_0']] . '  ' . $_REQUEST['sSortDir_0']  . ' LIMIT ' . intval($_REQUEST['iDisplayStart']) . ', ' . $iDisplayLength;

        //echo $sql;die;
        $qb = $em->getConnection()->prepare($sql);
        $qb->execute();
        $records['results'] = $qb->fetchAll();
        $records["aaData"] = array();

        return $records;
    }

    public function generateToken($table = "User") {
        $length = '30';
        $chaine = 'azertyuiopqsdfghjklmwxcvbn123456789';
        $nb_lettres = strlen($chaine) - 1;
        $generation = '';

        for($i=0; $i < $length; $i++) {
            $pos = mt_rand(0, $nb_lettres);
            $car = $chaine[$pos];
            $generation .= $car;
        }

        $tokenCheck = $this->em->getRepository('App:'.$table)->findOneBy(array("token" => $generation));

        if($tokenCheck != NULL) {
            $this->makeToken($table);
        }
        else {
            return $generation;
        }
    }

    public function captchaverify($recaptcha){
            $twig = $this->container->get('twig');
            $globals = $twig->getGlobals();

            $url = "https://www.google.com/recaptcha/api/siteverify";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, array(
                "secret"=>$globals['recaptcha_secret'],"response"=>$recaptcha));
            $response = curl_exec($ch);
            curl_close($ch);
            $data = json_decode($response);

        return $data->success;
    }
}
