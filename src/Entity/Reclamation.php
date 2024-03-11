<?php

namespace App\Entity;


use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "text")]
    #[Assert\NotBlank(message: "La description est obligatoire")]
    private ?string $description = null;

    #[ORM\Column(type: "boolean")]
    private bool $traitee = false;

    #[ORM\Column(type: "datetime")]
    private \DateTimeInterface $dateReclamation;

    #[ORM\ManyToOne(targetEntity: "App\Entity\TypeReclamation", inversedBy: "reclamations")]
    #[ORM\JoinColumn(nullable: false)]
    private ?TypeReclamation $typeReclamation = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $qrCode = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function isTraitee(): bool
    {
        return $this->traitee;
    }

    public function setTraitee(bool $traitee): self
    {
        $this->traitee = $traitee;
        return $this;
    }

    public function getDateReclamation(): ?\DateTimeInterface
    {
        return $this->dateReclamation;
    }

    public function setDateReclamation(\DateTimeInterface $dateReclamation): self
    {
        $this->dateReclamation = $dateReclamation;
        return $this;
    }

    public function getTypeReclamation(): ?TypeReclamation
    {
        return $this->typeReclamation;
    }

    public function setTypeReclamation(?TypeReclamation $typeReclamation): self
    {
        $this->typeReclamation = $typeReclamation;
        return $this;
    }

    public function __toString(): string
    {
        $etatTraitee = $this->isTraitee() ? "traitée" : "non traitée";
        return $this->getDescription() . ' - ' . $etatTraitee;
    }

    public function __construct()
    {
        $this->dateReclamation = new \DateTime();
    }

    public function getQrCode(): ?string
    {
        return $this->qrCode;
    }

    public function setQrCode(?string $qrCode): self
    {
        $this->qrCode = $qrCode;
        return $this;
    }
}
