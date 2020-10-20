<?php

namespace App\Controller\Front;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

use Swift_Attachment;
use Swift_Mailer;
use Swift_Message;


use App\Form\FreeExerciceType;
use App\Form\ContactType;
use App\Form\ListType;
use App\Entity\Figure;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="public_home")
     */
    public function index(Request $request, \Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactType::class);
        $session = $this->get('session');

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

          $data = $form->getData();

          $email = $data['email'];
          $lastname = $data['lastname'];
          $firstname = $data['firstname'];
          $select = $data['select'];
          $message = $data['message'];
          $video = $data['video'];
          // dump($video->getPathname());
          // die;
          // 3aanim@gmail.com
          if ($select == 'formation') {
            $messageInfo = (new \Swift_Message())
            // Give the message a subject
            ->setSubject('Demande d\'information')
            ->setFrom('noreply@aaanim.fr')
            ->setTo('simon.raby@limeointeractive.com')
            ->setBody(
              $this->renderView(
                  'emails/contactInfo.html.twig',
                  ['firstname' => $firstname,
                  'lastname' => $lastname,
                  'message' => $message,
                  'email' => $email
                ]
              ),
              'text/html'
            );
            $mailer->send($messageInfo);
          }elseif ($select == 'exercice') {
            $messageExe = (new \Swift_Message())
            // Give the message a subject
            ->setSubject('Exercice gratuit')
            ->setFrom('noreply@aaanim.fr')
            ->setTo('simon.raby@limeointeractive.com')
            ->setBody(
              $this->renderView(
                  'emails/contactExe.html.twig',
                  ['firstname' => $firstname,
                  'lastname' => $lastname,
                  'message' => $message,
                  'email' => $email
                ]
              ),
              'text/html'
            );
            if ($video) {
                $originalFilename = pathinfo($video->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $newFilename = $originalFilename.'-'.uniqid().'.'.$video->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $video->move(
                        $this->getParameter('upload_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
                // dump($video);
                // die;

                $messageExe->attach(Swift_Attachment::fromPath( $this->getParameter('upload_directory').'/'.$newFilename));
            }
            $mailer->send($messageExe);
          }

          $messageConfirm = (new \Swift_Message())
          // Give the message a subject
          ->setSubject('Confirmation de contact')
          ->setFrom('noreply@aaanim.fr')
          ->setTo($email)
          ->setBody(
            $this->renderView(
                'emails/confirmation.html.twig',
                ['firstname' => $firstname,
              ]
            ),
            'text/html'
          );


          $mailer->send($messageConfirm);
          $session->getFlashBag()->add('success', "Votre message à bien été envoyé.");
          $form = $this->createForm(ContactType::class);
          return $this->render('public/index.html.twig', array(
            'form' => $form->createView(),
            'anchor' => 'contact'
          ));

        }



        return $this->render('public/index.html.twig', array(
          'form' => $form->createView()
        ));
    }

    /**
     * @Route("/secteur-animation", name="public_animation")
     */
    public function animationPage(Request $request,  \Swift_Mailer $mailer)
    {
      
        $form = $this->createForm(ListType::class);
        
        $em = $this->getDoctrine();

        $sql = "SELECT * FROM figure WHERE rank is not null ORDER BY rank";

        $qb = $em->getConnection()->prepare($sql);
        $qb->execute();
        $figure = $qb->fetchAll();


        $form->handleRequest($request);
        $list = false;
        if ($form->isSubmitted()){
          $list = 'error';
          if ($form->isValid()) {
            $list = 'valid';
            $data = $form->getData();

            if (filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
              $list = true;
              $messageList = (new \Swift_Message())
              // Give the message a subject
              // 3aanim@gmail.com
              ->setSubject('Demande de liste')
              ->setFrom('noreply@aaanim.fr')
              ->setTo('3aanim@gmail.com')
              ->setBody(
                $this->renderView(
                    'emails/demandeList.html.twig',
                    ['firstname' => $data['firstname'],
                    'lastname' => $data['lastname'],
                    'email' => $data['email'],
                    'list' => $data['hiddenList']
                  ]
                ),
                'text/html'
              );

              $mailer->send($messageList);
            }
          }
        }

        $em = $this->getDoctrine();

        $sql = "SELECT * FROM article WHERE rank is not null ORDER BY rank";

        $qb = $em->getConnection()->prepare($sql);
        $qb->execute();
        $article = $qb->fetchAll();

        return $this->render('public/animation.html.twig', array(
          'form' => $form->createView(),
          'list' => $list,
          'figures' => $figure,
          'articles' => $article
        ));
    }

    /**
     * @Route("/formation", name="public_formation")
     */
    public function formationPage(Request $request)
    {
      $form = $this->createForm(FreeExerciceType::class);

      $form->handleRequest($request);
      $freeExe = false;
      if ($form->isSubmitted() && $form->isValid()) {
          $data = $form->getData();
          if (filter_var($data->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $freeExe = true;
          }
        }

        return $this->render('public/formation.html.twig', array(
          'form' => $form->createView(),
          'freeExe' => $freeExe
        ));
    }

    /**
     * @Route("/mentionLegales", name="public_mentions_legales")
     */
    public function mentionsPage(Request $request)
    {

        return $this->render('public/mentionsLegales.html.twig', array());
    }

    /**
     * @Route("/cgv", name="public_cgv")
     */
    public function cvgPage(Request $request)
    {

        return $this->render('public/cgv.html.twig', array());
    }

}
