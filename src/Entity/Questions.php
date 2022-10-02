<?php

namespace App\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use App\Repository\QuestionsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuestionsRepository::class)]
class Questions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_categorie = null;

    #[ORM\Column(length: 1200)]
    private ?string $question = null;

    #[ORM\ManyToOne(targetEntity: Categorie::class, inversedBy: 'questions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Categorie $category = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCategorie(): ?int
    {
        return $this->id_categorie;
    }

    public function setIdCategorie(int $id_categorie): self
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getCategory(): ?Categorie
    {
        return $this->category;
    }

    public function setCategory(?Categorie $category): self
    {
        $this->category = $category;

        return $this;
    }
}
