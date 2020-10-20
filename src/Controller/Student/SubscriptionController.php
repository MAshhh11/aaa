<?php

namespace App\Controller\Student;

use App\Entity\CotisationClubArchiveUser;
use App\Entity\CotisationUnionArchiveClub;
use App\Entity\CotisationUnionArchiveUser;
use App\Entity\CotisationUnionCall;
use App\Entity\Formation;
use App\Entity\FormationUser;
use App\Entity\RgpdOptin;
use App\Form\ProfileType;
use App\Form\SubscriptionType;
use Stripe\PaymentIntent;
use Stripe\Stripe;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use App\Service\FileUploader;
use App\Service\Tool;

use App\Form\UserType;
use App\Form\UserClubType;
use App\Form\UserFunctionType;
use App\Form\UserJobType;
use App\Form\UserAvatarType;

use App\Entity\User;
use App\Entity\Club;
use App\Entity\DataRole;
use App\Entity\UserClub;
use App\Entity\UserFunction;
use App\Entity\UserJob;
use App\Entity\DataOperation;


/**
 * @Route("/espace-etudiant/inscription")
 */

class SubscriptionController extends AbstractController
{

    /**
     * @Route("/formulaire/", requirements={}, name="subscription_form")
     */
    public function form(Request $request, $id = NULL, FileUploader $fileUploader, UserPasswordEncoderInterface $passwordEncoder, \Swift_Mailer $mailer, UrlGeneratorInterface $router)
    {
        $em = $this->getDoctrine();    
        $session = $this->get('session');

        $item = new User();
        $form = $this->createForm(SubscriptionType::class, $item);
        $formations = $em->getRepository(Formation::class)->findAll();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine();
            $item = $form->getData();

            //check emails
            $sql = "SELECT u.email FROM user as u";
            $qb =$em->getConnection()->prepare($sql);
            $qb->execute();
            $emails = $qb->fetchAll();
            $allEmails = [];
            foreach ($emails as $email) {
                $allEmails []= $email['email'];
            }

            if(filter_var($item->getEmail(), FILTER_VALIDATE_EMAIL) && !in_array($item->getEmail() , $allEmails) ) {

                $item->setToken(uniqid());
                $item->setPassword($passwordEncoder->encodePassword(
                    $item,
                    $form['password']->getData()
                ));

                $em->getManager()->persist($item);

                $rgpdOptin = $request->request->get('rgpd');
                $url = $request->headers->get('referer');
                $ip = $request->getClientIp();
                $now = new \Datetime();

                $opt = new RgpdOptin();
                $opt->setUser($item);
                $opt->setCreatedAt($now);
                $opt->setUrl($url);
                $opt->setIpAddress($ip);
                $opt->setOptinEmail($rgpdOptin);
                $em->getManager()->persist($opt);
                $em->getManager()->flush();

                //get formation for checkout
                $formationId = $request->request->get('formation');

                $message = (new \Swift_Message())
                    ->setSubject('Confirmation de votre inscription sur la plateforme l\'Animateur Autodidacte Accompagné')
                    ->setFrom($_ENV['MAILER_ADDRESS'])
                    ->setTo($item->getEmail())
                    ->setContentType('text/html')
                   ->setBody($this->renderView('emails/confirm_subscription.html.twig', array('student' => $item)));
                $mailer->send($message);

                $session->getFlashBag()->add('success', "Un e-mail vient de voir être envoyé pour validez votre inscription");

                //login new registered user
                $token = new UsernamePasswordToken($item, null, 'main', $item->getRoles());
                $this->container->get('security.token_storage')->setToken($token);
                $this->container->get('session')->set('_security_main', serialize($token));
                return $this->redirectToRoute('formation_checkout', array('formationId' => $formationId));

            } else {

                $session->getFlashBag()->add('error', "Cette adresse email est déjà utilisée, veuillez renseigner une autre adresse email pour procéder à votre inscription");
                return $this->redirectToRoute('subscription_form', array('id'=>$item->getId()));

            }
        }

        return $this->render('student/subscription/form.html.twig', array(
            'item' => $item,
            'form' => $form->createView(),
            'formations' => $formations,
        ));
    }

    /**
     * @Route("/formations/", name="formation_choice")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function formationChoice(Request $request)
    {
        $em = $this->getDoctrine();
        $formations = $em->getRepository(Formation::class)->findAll();
        return $this->render('student/subscription/formation_form.html.twig', ['formations' => $formations]);
    }


    /**
     * @Route("/formation/checkout/{formationId}", name="formation_checkout")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function formationPayment(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $env = $_ENV['STRIPE_ENV'];
        $API = [
            'dev' => $_ENV['STRIPE_SK_DEV'],
            'prod' => $_ENV['STRIPE_SK_PROD']
        ];
        Stripe::setApiKey($API[$env]);

        $formationId = $request->get('formationId');
        $email = $user->getEmail();
        $em = $this->getDoctrine();
        $formation = $em->getRepository(Formation::class)->find($formationId);
        $description = 'Règlement - ' . 'Formation ' . $formation->getTitle() . '_' . $formationId;
        $ht = $formation->getPrice();

        $fee = (0.014 * $ht) + 0.25; // taxe stripe
        $ttc = $fee + $ht;
        $checkFormat = explode(',',$ttc);
         if( count($checkFormat) > 1) {
             $amount = number_format($ttc, 2) * 100;
         } else {
             $amount = $ttc * 100;
         }

        $intent = PaymentIntent::create([
            'amount' => intval($amount),  // centimes
            'currency' => 'eur',
            'description' => $description,
            'receipt_email' => $email,
        ]);

        return $this->render('student/subscription/checkout.html.twig', array(
            "formation" => $formation,
            "menu" => "cotisation_union",
            "page_name" => "Paiement de votre formation",
            "ht" => $ht,
            "fee" => $fee,
            "ttc" => $ttc,
            "intent" => $intent
        ));
    }

    /**
     * @Route("/paiement/{token}", name="formation_payment")
     */
    public function formationPaymentConfirm(Request $request, $token = null, \Swift_Mailer $mailer)
    {
        $em = $this->getDoctrine()->getManager();
        $env = $_ENV['STRIPE_ENV'];
        $API = [
            'dev' => $_ENV['STRIPE_SK_DEV'],
            'prod' => $_ENV['STRIPE_SK_PROD']
        ];
        \Stripe\Stripe::setApiKey($API[$env]);

        $user = $this->get('security.token_storage')->getToken()->getUser();

        $em->flush();
        $data = $request->request->get('paymentIntent');
        $charge = \Stripe\PaymentIntent::retrieve(
            $data
        );
        $ch = $charge['charges']['data'];


        if ( count($ch) > 0 ){
            $formationId = explode('_', $charge['description'])[1];
            $formation = $em->getRepository(Formation::class)->find($formationId);

            $session = $this->get('session');
            $session->getFlashBag()->add('success', "Votre paiement a bien été effectué");

            $userFormation = new FormationUser();
            $userFormation->setUser($user);
            $userFormation->setFormation($formation);
            $userFormation->setIsCurrent(1);
            $userFormation->setCreatedAt(new \DateTime());
            $userFormation->setUpdatedAt(new \DateTime());
            $em->persist($userFormation);
            $em->flush();

            //validation paiement
            $message = (new \Swift_Message())
                ->setSubject('Confirmation de votre inscription à la formation' . $formation->getTitle() )
                ->setFrom($_ENV['MAILER_ADDRESS'])
                ->setTo($user->getEmail())
                ->setContentType('text/html')
                ->setBody($this->renderView('emails/confirm_subscription.html.twig', array('student' => $user, 'formation' => $formation)));
            $mailer->send($message);


            return $this->redirectToRoute('dashboard_home');
        }
        return $this->redirectToRoute('dashboard_home');
    }
    
    
}
