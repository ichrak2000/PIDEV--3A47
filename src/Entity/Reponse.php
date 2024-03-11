<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReponseRepository::class)]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id;

    #[ORM\Column(type: "text")]
    #[Assert\NotBlank(message: "Le contenu est obligatoire")]
    private ?string $contenu;

    #[ORM\Column(type: "datetime")]
    private \DateTimeInterface $dateReponse;

    #[ORM\ManyToOne(targetEntity: "App\Entity\Reclamation", inversedBy: "reponses")]
    #[ORM\JoinColumn(nullable: false)]
    private ?Reclamation $reclamation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;
        return $this;
    }

    public function getDateReponse(): ?\DateTimeInterface
    {
        return $this->dateReponse;
    }

    public function setDateReponse(\DateTimeInterface $dateReponse): self
    {
        $this->dateReponse = $dateReponse;
        return $this;
    }

    public function getReclamation(): ?Reclamation
    {
        return $this->reclamation;
    }

    public function setReclamation(?Reclamation $reclamation): self
    {
        $this->reclamation = $reclamation;
        return $this;
    }

    public function __toString(): string
    {
        return $this->getContenu();
    }

    public function __construct()
    {
        $this->dateReponse = new \DateTime();
    }
}
