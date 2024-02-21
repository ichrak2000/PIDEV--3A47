<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * @ORM\Entity(repositoryClass="App\Repository\TypeReclamationRepository")
 */
class TypeReclamation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * Assert\NotBlank(message="Le nom est obligatoire")
     */
    private $nom;

    
    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="La description est obligatoire")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reclamation", mappedBy="typeReclamation")
     */
    private $reclamations;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
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

    /**
     * @return Collection|Reclamation[]
     */
    public function getReclamations(): Collection
    {
        return $this->reclamations;
    }

    public function addReclamation(Reclamation $reclamation): self
    {
        if (!$this->reclamations->contains($reclamation)) {
            $this->reclamations[] = $reclamation;
            $reclamation->setTypeReclamation($this);
        }

        return $this;
    }

    public function removeReclamation(Reclamation $reclamation): self
    {
        if ($this->reclamations->contains($reclamation)) {
            $this->reclamations->removeElement($reclamation);
            // set the owning side to null (unless already changed)
            if ($reclamation->getTypeReclamation() === $this) {
                $reclamation->setTypeReclamation(null);
            }
        }

        return $this;
    }
    public function __toString()
{
    return $this->getNom();
}

}
