<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\ReclamationRepository")
 */
class Reclamation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

 
    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="La description est obligatoire")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateReclamation;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TypeReclamation", inversedBy="reclamations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeReclamation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
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
        public function __toString()
    {
        return $this->getDescription();
    }
    public function __construct()
    {
        $this->dateReclamation = new \DateTime();
    }


}
