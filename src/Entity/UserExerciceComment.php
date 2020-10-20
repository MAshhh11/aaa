<?php

namespace App\Entity;

use App\Repository\UserExerciceCommentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserExerciceCommentRepository::class)
 */
class UserExerciceComment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=UserExercice::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $user_exercice;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="text")
     */
    private $comment;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $is_seen;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserExercice(): ?UserExercice
    {
        return $this->user_exercice;
    }

    public function setUserExercice(?UserExercice $user_exercice): self
    {
        $this->user_exercice = $user_exercice;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getIsSeen(): ?bool
    {
        return $this->is_seen;
    }

    public function setIsSeen(?bool $is_seen): self
    {
        $this->is_seen = $is_seen;

        return $this;
    }
}
