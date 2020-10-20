<?php

namespace App\Entity;

use App\Repository\ExerciceTechnicalDocumentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExerciceTechnicalDocumentRepository::class)
 */
class ExerciceTechnicalDocument
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Exercice::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $exercice;

    /**
     * @ORM\ManyToOne(targetEntity=TechnicalDocument::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $technical_document;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExercice(): ?Exercice
    {
        return $this->exercice;
    }

    public function setExercice(?Exercice $exercice): self
    {
        $this->exercice = $exercice;

        return $this;
    }

    public function getTechnicalDocument(): ?TechnicalDocument
    {
        return $this->technical_document;
    }

    public function setTechnicalDocument(?TechnicalDocument $technical_document): self
    {
        $this->technical_document = $technical_document;

        return $this;
    }
}
