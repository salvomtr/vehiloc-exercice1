<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VoitureRepository::class)]
class Voiture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $modele = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column(length: 255)]
    private ?string $transmission = null;

    #[ORM\Column(length: 255)]
    private ?string $kilometrage = null;

    #[ORM\Column]
    private ?float $prixParJour = null;

    #[ORM\Column]
    private ?float $prixParMois = null;

    #[ORM\Column]
    private ?int $places = null;

    #[ORM\Column]
    private ?bool $manuelle = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): static
    {
        $this->modele = $modele;
        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;
        return $this;
    }

    public function getTransmission(): ?string
    {
        return $this->transmission;
    }

    public function setTransmission(string $transmission): static
    {
        $this->transmission = $transmission;
        return $this;
    }

    public function getKilometrage(): ?string
    {
        return $this->kilometrage;
    }

    public function setKilometrage(string $kilometrage): static
    {
        $this->kilometrage = $kilometrage;
        return $this;
    }

    public function getPrixParJour(): ?float
    {
        return $this->prixParJour;
    }

    public function setPrixParJour(float $prixParJour): static
    {
        $this->prixParJour = $prixParJour;
        return $this;
    }

    public function getPrixParMois(): ?float
    {
        return $this->prixParMois;
    }

    public function setPrixParMois(float $prixParMois): static
    {
        $this->prixParMois = $prixParMois;
        return $this;
    }

    public function getPlaces(): ?int
    {
        return $this->places;
    }

    public function setPlaces(int $places): static
    {
        $this->places = $places;
        return $this;
    }

    public function isManuelle(): ?bool
    {
        return $this->manuelle;
    }

    public function setManuelle(bool $manuelle): static
    {
        $this->manuelle = $manuelle;
        return $this;
    }
}
