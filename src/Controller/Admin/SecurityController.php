<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use App\Service\Tool;
use App\Entity\User;

/**
 * @Route("/espace-etudiant")
 */

class SecurityController extends AbstractController
{    
    /**
     * @Route("/connexion", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
             return $this->redirectToRoute('dashboard_home');
        }
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('admin/security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }
    
    /**
     * @Route("/mot-de-passe-perdu", name="security_reset_password")
     */
    public function resetPassword(Request $request, Tool $tool, \Swift_Mailer $mailer, UrlGeneratorInterface $router)
    {        
        if ($this->getUser()) {
             return $this->redirectToRoute('dashboard_home');
        }
        
        if ($request->isMethod('post')) {
            $em = $this->getDoctrine()->getManager();
            $session = $this->get('session');   
            
            if(!$tool->captchaverify($request->get('recaptcha_response'))) {                
                $session->getFlashBag()->add('error', "Erreur de sécurité avec le captcha code.");
                return $this->redirectToRoute('security_reset_password');
            }
            
            $email = $request->request->get('email');            
            $checkEmail = $em->getRepository(User::class)->findOneBy(array("email" => $email));     
            
            if(!$checkEmail) {                
                $session->getFlashBag()->add('error', "L'adresse e-mail renseignée n'existe pas.");
                return $this->redirectToRoute('security_reset_password');
            } else {
                
                $token = $tool->generateToken();
                $checkEmail->setToken($token);
                $em->persist($checkEmail);
                $em->flush();
                
                $url = $router->generate('security_update_password', ['email' =>$checkEmail->getEmail(), 'token' => $checkEmail->getToken()], UrlGeneratorInterface::ABSOLUTE_URL);
                $message = (new \Swift_Message())
                    ->setSubject('Modification de votre mot de passe')
                    ->setFrom(array($_ENV['MAILER_ADDRESS'] => $_ENV['MAILER_NAME']))
                    ->setTo($checkEmail->getEmail())
                    ->setContentType('text/html')
                   ->setBody($this->renderView('email/reset-pwd.html.twig', array('user' => $checkEmail, 'url' => $url)));

                $mailer->send($message);                
                $session->getFlashBag()->add('success', "Un e-mail de récupération de mot de passe à été envoyé.");
                return $this->redirectToRoute('security_reset_password');                
            }            
        }

        return $this->render('admin/security/reset_password.html.twig', []);
    }
        
    /**
     * @Route("/mise-a-jour-mot-de-passe/{email}/{token}", name="security_update_password")
     */
    public function updatePassword(Request $request, $email, $token, UserPasswordEncoderInterface $passwordEncoder)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->get('session');   
        $checkUser = $em->getRepository(User::class)->findOneBy(array("email" => $email, "token" => $token));     
            
        if(!$checkUser) {                
            $session->getFlashBag()->add('error', "La page demandée n'existe pas.");
            return $this->redirectToRoute('security_reset_password');
        }
            
        if($request->isMethod('post')) {
            $password = $request->request->get('password');            
            if (!hash_equals($request->request->get('password'), $request->request->get('confirm_password'))) {
               $session->getFlashBag()->add('error', "Les deux mots de passe sont différents");
                return $this->redirectToRoute('security_update_password', ['email' =>$checkUser->getEmail(), 'token' => $checkUser->getToken()]);
            }
            else if(!$password) {                
                $session->getFlashBag()->add('error', "Le mot de passe est obligatoire");
                return $this->redirectToRoute('security_update_password', ['email' =>$checkUser->getEmail(), 'token' => $checkUser->getToken()]);
            } else {
                $checkUser->setPassword($passwordEncoder->encodePassword(
                     $checkUser,
                     $request->request->get('password')
                 ));
                $checkUser->setToken(NULL);
                $em->persist($checkUser);
                $em->flush();                
                $session->getFlashBag()->add('success', "Votre mot de passe a été mis à jour !");
                return $this->redirectToRoute('app_login');                
            }            
        }

        return $this->render('admin/security/update_password.html.twig', []);
    }
    
    /**
     * @Route("/changement-client/{id}", name="switch_customer")
     */
    public function switchCustomer(AuthenticationUtils $authenticationUtils, $id)
    {
        $session = $this->get('session');   
        $session->set('customer_id', $id);
        
        return $this->redirectToRoute('dashboard_home');
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        $session = $this->get('session');   
        $session->getFlashBag()->add('success', "Déconnexion !");
        
        return $this->redirectToRoute('app_login');
    }
}
