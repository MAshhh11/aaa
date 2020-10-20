<?php

namespace App\Entity;

use App\Repository\ExerciceFileRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExerciceFileRepository::class)
 *
 */
class ExerciceFile
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $exercice_id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_presentation;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_technical_document;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $file;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $filename;

    public function __construct()
    {
        $this->exercice = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExerciceId()
    {
        return $this->exercice_id;
    }

    public function setExerciceId($exercice_id): void
    {
        $this->exercice_id = $exercice_id;
    }

    public function getIsPresentation(): ?bool
    {
        return $this->is_presentation;
    }

    public function setIsPresentation(bool $is_presentation): self
    {
        $this->is_presentation = $is_presentation;

        return $this;
    }

    public function getIsTechnicalDocument(): ?bool
    {
        return $this->is_technical_document;
    }

    public function setIsTechnicalDocument(bool $is_technical_document): self
    {
        $this->is_technical_document = $is_technical_document;

        return $this;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(string $file): self
    {
        $this->file = $file;

        return $this;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }
}
