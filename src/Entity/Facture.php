<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;



/**
 * Facture
 *
 * @ORM\Table(name="Facture", indexes={@ORM\Index(name="commandeid", columns={"commandeId"})})
 * @ORM\Entity(repositoryClass="App\Repository\FactureRepository")
 */
class Facture
{
    /**
     * @var int
     *
     * @ORM\Column(name="FactureId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     *  @Groups({"Facture"})

     */
    private $Factureid;

     /**
     * @var Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumn(name="commandeId", referencedColumnName="commandeId")
     * @Groups({"Facture"})
     */
    private $commande;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     * @Groups({"Facture"})
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     * @Groups({"Facture"})
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     * @Groups({"Facture"})
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     * @Groups({"Facture"})
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="numTelephone", type="integer", nullable=false)
     * @Groups({"Facture"})
     */
    private $numtelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", nullable=false)
     * @Groups({"Facture"})
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="totalCost", type="integer", nullable=false)
     * @Groups({"Facture"})
     */
    private $totalcost;

    public function getFactureid(): ?int
    {
        return $this->Factureid;
    }

    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): self
    {
        $this->commande = $commande;

        return $this;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getNumtelephone(): ?int
    {
        return $this->numtelephone;
    }

    public function setNumtelephone(int $numtelephone): self
    {
        $this->numtelephone = $numtelephone;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    public function getTotalcost(): ?int
    {
        return $this->totalcost;
    }

    public function setTotalcost(int $totalcost): self
    {
        $this->totalcost = $totalcost;

        return $this;
    }


}