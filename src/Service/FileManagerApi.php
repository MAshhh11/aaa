<?php
namespace App\Service;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use Doctrine\Common\Persistence\ManagerRegistry;

use App\Entity\GedFile;
use App\Entity\GedFolder;
/**
 * File Manager API Class
 *
 * Made for PHP Local filesystem bridge for angular-filemanager to handle file manipulations
 * @author Jakub Ďuraš <jakub@duras.me>
 */
class FileManagerApi
{
    private $basePath = null;

    private $translate;

    private $is_admin;

    private $em = null;

    private $tokenFolder = 'jEA2FhtxrjW3EoYHSAV3TamGBSVqU1qS';

    public function __construct(ManagerRegistry $em, Container $container)
    {
        $this->em       = $em->getManager();
        $this->container= $container;
    }

    public function getName() {
        return 'ged';
    }

    public function init($basePath = null, $lang = 'en', $muteErrors = true, $is_admin = true)
    {
        if ($muteErrors) {
            ini_set('display_errors', 0);
        }

        $this->is_admin = $is_admin;
        $this->basePath = $this->canonicalizePath($basePath);
        $this->translate = new GedTranslate($lang);

    }

    public function getGedFile($id)
    {
      $em = $this->em;
      $ged_file = $em->getRepository(GedFile::class)->find($id);

      if ( $ged_file != null ){

        $ged_revisions = $em
        ->getRepository(GedFile::class)
        ->findByFileId($ged_file->getId());

        $revisions = [];

        if ( $ged_revisions != null){
          foreach ($ged_revisions as $item ) {
            $revisions[] = [
              'realname' => $item->getRealName(),
              'name' => $item->getRealName(),
              'created_at' => $item->getCreatedAt()
            ];
          }
        }
        $author = $em->getRepository('App:User')->find($ged_file->getOwnerId());

        $result = [
          'deleted' => $ged_file->getIsDeleted(),
          'file_id' => $ged_file->getId(),
          'folder_id' => $ged_file->getFolderId(),
          'name' => $ged_file->getName(),
          'realname' => $ged_file->getRealName(),
          'type' => '',
          'created_at' => $ged_file->getCreatedAt(),
          'updated_at' => $ged_file->getUpdatedAt(),
          'token' => $ged_file->getToken(),
          'author' => $author != null ? $author->getFirstname().' '.$author->getLastname() : 'Inconnu',
          'revisions' => $revisions
        ];

      }
      return json_encode($result);
    }

    public function getGedFolder($path)
    {
      $ged_folder = $this->em
      ->getRepository(GedFolder::class)
      ->findOneByPath($path);

      $result = [];

      if ( $ged_folder != null ){

        $ged_file = $this->em
        ->getRepository(GedFile::class)
        ->findByFolderId($ged_folder->getId());

        if ( $ged_file != null ){

          foreach ($ged_file as $file) {

            $result[] = [
              'date' => $file->getUpdatedAt()->format('d/m/Y'),
              'category' => $cat
            ];
          }
        }
      }
      return json_encode($result);
    }

    public function insertGedFile($filename,$realname, $folder, $owner_id = 1)
    {
      $new_file = new GedFile();
      $new_file->setName($filename);
      $new_file->setRealName($realname);
      $new_file->setFolderId($folder);
      $new_file->setFileId(NULL);
      $new_file->setType('ticket');
      $new_file->setTypeId(0);
      $new_file->setTypeFileId(0);
      $new_file->setOwnerId($owner_id);
      $new_file->setIsLocked(0);
      $new_file->setIsValided(0);
      $new_file->setIsDeleted(0);
      $new_file->setCreatedAt(new \Datetime());
      $new_file->setUpdatedAt(new \Datetime());
      $this->em->persist($new_file);
      $this->em->flush();

      return $new_file->getId();
    }

    public function editGedFile($file_id, $file, $exist)
    {
      $ged_file = $this->em
      ->getRepository(GedFile::class)
      ->findOneById($file_id);

      $new_file = new GedFile();
      $new_file->setName($ged_file->getName());
      $new_file->setRealName('tmp');
      $new_file->setFolderId(0);
      $new_file->setFileId($ged_file->getId());
      $new_file->setType($ged_file->getType());
      $new_file->setOwnerId(0);
      $new_file->setIsLocked(0);
      $new_file->setIsValided(0);
      $new_file->setIsDeleted(0);
      $new_file->setCreatedAt(new \Datetime());
      $new_file->setUpdatedAt(new \Datetime());

      $ged_file->setUpdatedAt(new \Datetime());

      $this->em->persist($new_file);
      $this->em->flush();

      $name = $new_file->getId().'_'.$file['name'];

      if ( $exist ){

        $dir = '../public/'.$this->tokenFolder.'/ged_revisions';
        $handle  = new \upload($file);
        $handle->file_safe_name = false;
        if ($handle->uploaded) {
          $handle->file_name_body_pre = $new_file->getId().'_';
          $handle->process($dir);

          $new_file->setRealName($name);
          $this->em->flush();

          if ($handle->processed) {
            $result = [
              'file_id' => $new_file->getId(),
              'name' => $new_file->getRealName(),
              'created_at' => $new_file->getCreatedAt()
            ];
            return json_encode($result);
          }
        }
      } else {

        $new_file->setRealName($name);
        $this->em->flush();
      }
    }

    public function removeGedFile($file_id)
    {
      $ged_file = $this->em
      ->getRepository(GedFile::class)
      ->findOneById($file_id);

      $ged_folder = $this->em->getRepository(GedFolder::class)->findOneById($ged_file->getFolderId());
      $dir = '../public/'.$this->tokenFolder.'/ged/'.$ged_file->getRealName();
      unlink($dir);

      $this->em->remove($ged_file);
      $this->em->flush();

      return 'success';
    }

    public function restoreGedFile($file_id)
    {
      $ged_file = $this->em
      ->getRepository(GedFile::class)
      ->findOneById($file_id);

      $repo = $this->em->getRepository(GedFolder::class);

      $ged_trash = $repo
      ->findOneById($ged_file->getFolderId());

      $ged_folder = $repo
      ->findOneById($ged_file->getType());

      $ged_file->setIsDeleted(0);
      $ged_file->setFolderId($ged_file->getType());
      $ged_file->setType('holder');
      $this->em->flush();

      return 'success';

    }
}
