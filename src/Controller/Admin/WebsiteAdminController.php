<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\Figure;
use App\Entity\UserExercice;
use App\Entity\Video;
use App\Form\ArticleType;
use App\Form\FigureType;
use App\Form\FormationType;
use App\Form\VideoType;
use App\Service\FileUploader;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\String\Slugger\SluggerInterface;



/**
 * @Route("/espace-etudiant/admin/gestion-site")
 * @Security("is_granted('ROLE_ADMIN')")
 */

class WebsiteAdminController extends AbstractController
{
    /**
     * @Route("/chiffres-cles/{id}", requirements={}, name="website_admin_figure")
     * @param Request $request
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function keyFigures(Request $request, $id = NULL)
    {
        $em = $this->getDoctrine();
        $figures = $em->getRepository(Figure::class)->findAll();
        
        
        if($id) {
            $item = $em->getRepository(Figure::class)->find($id);
        } else {
            $item = new Figure();
        }


        $form = $this->createForm(FigureType::class, $item);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $item = $form->getData();
            $em->getManager()->persist($item);
            $em->getManager()->flush();
            $item = new Figure();
            $figures = $em->getRepository(Figure::class)->findAll();
            $form = $this->createForm(FigureType::class, $item);
        }


        return $this->render('admin/website_admin/figure/form.html.twig', ['form' => $form->createView(), "figures" => $figures]);
    }

    /**
     * @Route("/chiffres-cles/suppression/{id}", name="figure_delete", methods="DELETE")
     */
    public function deleteFigure(Request $request, $id)
    {
        $em = $this->getDoctrine();
        $figure = $em->getRepository(Figure::class)->find($id);
        $this->deleteItem($figure, $request);
        return $this->redirectToRoute('website_admin_figure',[]);
    }

    /**
     * @Route("/articles/{id}", requirements={}, name="website_admin_article")
     * @param Request $request
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function articles(Request $request, $id = NULL)
    {
        $em = $this->getDoctrine();
        $articles = $em->getRepository(Article::class)->findAll();

        if($id) {
            $item = $em->getRepository(Article::class)->find($id);
        } else {
            $item = new Article();
        }

        $form = $this->createForm(ArticleType::class, $item);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $item = $form->getData();
            $em->getManager()->persist($item);
            $em->getManager()->flush();
            $item = new Article();
            $articles = $em->getRepository(Article::class)->findAll();
            $form = $this->createForm(ArticleType::class, $item);
        }


        return $this->render('admin/website_admin/article/form.html.twig', ['form' => $form->createView(), "articles" => $articles]);
    }

    /**
     * @Route("/articles/suppression/{id}", name="article_delete", methods="DELETE")
     */
    public function deleteArticle(Request $request, $id)
    {
        $em = $this->getDoctrine();
        $article = $em->getRepository(Article::class)->find($id);
        $this->deleteItem($article, $request);
        return $this->redirectToRoute('website_admin_article',[]);
    }

    /**
     * @Route("/video", name="website_admin_video")
     * @param Request $request
     * @param SluggerInterface $sluggerr
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function videoIntro(Request $request, SluggerInterface $slugger)
    {
        $em = $this->getDoctrine();
        $video = $em->getRepository(Video::class)->find(1);
        if(!$video){
            $video = new Video();
        }

        $form = $this->createForm(VideoType::class, $video);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $item = $form->getData();
            $em->getManager()->persist($item);
            $em->getManager()->flush();

            $file = $form->get("video_file")->getData();
            if ($file) {
                $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();
                try {
                    $file->move(
                        $this->getParameter('video_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                    $session = $this->get('session');
                    $session->getFlashBag()->add('error', "Erreur !");
                    return $this->redirectToRoute('website_admin_video');
                }

                // updates the 'file' property to store the PDF file name
                // instead of its contents
                $item->setVideoFile($originalFilename);
                $em->getManager()->persist($item);
                $em->getManager()->flush();
                $session = $this->get('session');
                $session->getFlashBag()->add('succes', "vidéo modifiée !");
                return $this->redirectToRoute('website_admin_video');
            }

        }
        return $this->render('admin/website_admin/video/form.html.twig', ['form' => $form->createView(), 'video' => $video]);
    }

    /**
     * @Route("/stockage", name="website_admin_storage")
     */
    public function manageStorage()
    {
        $em = $this->getDoctrine();

        function folderSize ($dir)
        {
            $size = 0;
            foreach (glob(rtrim($dir, '/').'/*', GLOB_NOSORT) as $each) {
                $size += is_file($each) ? filesize($each) : folderSize($each);
            }
            return $size;
        }

        $dir = $this->getParameter('kernel.project_dir').'/uploads';
        //pour avoir en Go
        $stored = folderSize($dir) * 0.000000001;


        $query = $em->getManager()->createQuery(
            'SELECT f
            FROM App\Entity\UserExercice f
            WHERE f.file IS NOT NULL'
        );
        $files = $query->getResult();

        $filesSizes = [];
        foreach ($files as $file) {
            $filesSizes []= [$file->getId() => filesize($this->getParameter('kernel.project_dir').'/uploads/student_exercice/'. $file->getId() . '/'.$file->getfile()) * 0.000000001];
        }


        return $this->render('admin/website_admin/storage/form.html.twig', ["stored" => $stored, 'files' => $files, 'filesSizes' => $filesSizes]);
    }

    /**
     * @Route("/stockage/{id}", name="file_delete", methods={"DELETE"})
     * @param Request $request
     * @param Filesystem $filesystem
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteFromStorage(Request $request, Filesystem $filesystem)
    {
        $em = $this->getDoctrine();
        $session = $this->get('session');
        $id = $request->get('id');
        $file = $em->getRepository(UserExercice::class)->find($id);

        $filesystem = new Filesystem();
        $path = $this->getParameter('kernel.project_dir'). '/uploads/student_exercice/' .$file->getId() . '/'. $file->getFile();
        $filesystem->remove($path);
        $file->setFile(null);
        $em->getManager()->persist($file);
        $em->getManager()->flush();
        $this->addFlash('success','Soumission supprimer !!');

//        $this->addFlash('success','Le document a bien été supprimé');
//
//
        return $this->redirectToRoute('website_admin_storage');
    }




    private function deleteItem($item, $request){
        $session = $this->get('session');
        if ($this->isCsrfTokenValid('delete'.$item->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($item);
            $em->flush();
            $session->getFlashBag()->add('success', "La suppression a bien été effectuée");

        } else {
            $session->getFlashBag()->add('error', "Erreur !");
        }
    }

}
