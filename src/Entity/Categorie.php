<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom ne peut pas être vide")]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La description ne peut pas être vide")]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le service associé ne peut pas être vide")]
    private ?string $service_associe = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date de création ne peut pas être vide")]
    private ?\DateTimeInterface $date_de_creation = null;

    #[ORM\Column(length: 255)]
    #[Assert\File(
        mimeTypes: ["image/jpeg", "image/png"],
        mimeTypesMessage: "Veuillez télécharger une image au format JPEG ou PNG"
    )]
    private ?string $imagePath = null;

    #[ORM\OneToMany(targetEntity: Service::class, mappedBy: 'categorie')]
    private Collection $slug;

    public function __construct()
    {
        $this->slug = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getServiceAssocie(): ?string
    {
        return $this->service_associe;
    }

    public function setServiceAssocie(string $service_associe): static
    {
        $this->service_associe = $service_associe;

        return $this;
    }

    public function getDateDeCreation(): ?\DateTimeInterface
    {
        return $this->date_de_creation;
    }

    public function setDateDeCreation(\DateTimeInterface $date_de_creation): static
    {
        $this->date_de_creation = $date_de_creation;

        return $this;
    }

    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function setImagePath(string $imagePath): static
    {
        $this->imagePath = $imagePath;

        return $this;
    }

    /**
     * @return Collection<int, Service>
     */
    public function getSlug(): Collection
    {
        return $this->slug;
    }

    public function addSlug(Service $slug): static
    {
        if (!$this->slug->contains($slug)) {
            $this->slug->add($slug);
            $slug->setCategorie($this);
        }

        return $this;
    }

    public function removeSlug(Service $slug): static
    {
        if ($this->slug->removeElement($slug)) {
            // set the owning side to null (unless already changed)
            if ($slug->getCategorie() === $this) {
                $slug->setCategorie(null);
            }
        }

        return $this;
    }
}