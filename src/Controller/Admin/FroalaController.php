<?php

namespace App\Controller\Admin;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use App\Form\AdsType;
use App\Entity\Ads;
use App\Service\Tool;
use App\Service\FileUploader;

/**
 * @Route("/froala")
 */

class FroalaController extends AbstractController
{
    /**
     * @Route("/envoi-image", name="froala_upload_file")
     */
    public function uploadFile(Request $request, FileUploader $fileUploader)
    {
        $config = $this->getConfig($request);
        $file = $_FILES['file'];        
        $filename = $_FILES['file']['name'];        
        $filename = $this->renameFile($config['image_dir'], $filename);
        
        if (move_uploaded_file($_FILES['file']['tmp_name'], $config['image_dir'].$filename)) {
            $picture = ["link" => $config['image_url'].$filename];        
            return new response(json_encode($picture));
        } else {
            return new response("ko");
        }
    }
    
    /**
     * @Route("/suppression-image", name="froala_remove_file")
     */
    public function removeFile(Request $request)
    {
        $config = $this->getConfig($request);
        $src = $request->request->get('src');
        
        $file = str_replace($config['image_url'], "", $src);
        
        unlink($config['image_dir'].$file);
        
        return new response($file);
    }
    
    /**
     * @Route("/liste-images", name="froala_lib_files")
     */
    public function libFiles(Request $request)
    { 
        $config = $this->getConfig($request);
        
        if($config['image_dir']) {
            $files = scandir($config['image_dir']);
        }
        
        $results = array();
        foreach($files as $file) {
            $results[] =
                ["url" => $config['image_url'].$file,
               "thumb" => $config['image_url'].$file,
               "name" => $file];
        }
        
        return new response(json_encode($results));
        
    }
    
    /**
     * @Route("/envoi-video", name="froala_upload_video")
     */
    public function uploadVideo(Request $request)
    {         
        $config = $this->getConfig($request);
        
        $file = $_FILES['file'];        
        $filename = $_FILES['file']['name'];
        
        if (move_uploaded_file($_FILES['file']['tmp_name'], $config['video_dir'].$filename)) {
            $video = ["link" => $config['video_url'].$filename];        
            return new response(json_encode($video));
        } else {
            return new response("ko");
        }
    }
    
    private function getConfig($request) {
        $result = array();
        
        $baseurl = $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath();
        
        $result['image_dir'] = $this->getParameter('kernel.project_dir').'/public/communication/images/';
        $result['image_url'] = $baseurl.'/communication/images/';
        $result['video_dir'] = $this->getParameter('kernel.project_dir').'/public/communication/videos/';
        $result['video_url'] = $baseurl.'/communication/videos/';
        
        if(!is_dir($result['image_dir'])){
            mkdir($result['image_dir'],0755, true);
        }
        
        if(!is_dir($result['video_dir'])){
            mkdir($result['video_dir'],0755, true);
        }
        
        return $result;
    }
    
    private function renameFile($dir, $filename) {        
        $fileExplode = explode(".", $filename);
        $filename = $this->slugify($fileExplode[0]);
        $newfilename = $filename."_".uniqid().".".$fileExplode[1];
        
        return $newfilename;
    }
    
    private function slugify($text) {
      $text = preg_replace('~[^\pL\d]+~u', '-', $text); // replace non letter or digits by -
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text); // transliterate
      $text = preg_replace('~[^-\w]+~', '', $text); // remove unwanted characters
      $text = trim($text, '-'); // trim
      $text = preg_replace('~-+~', '-', $text); // remove duplicate -
      $text = strtolower($text); // lowercase

      if (empty($text)) {
        return 'n-a';
      }

      return $text;
    }
    
}
