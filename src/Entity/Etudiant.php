<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EtudiantRepository")
 */
class Etudiant
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nomEtudiant;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $prenomEtudiant;

    /**
     * @ORM\Column(type="date")
     */
    private $dateNaissanceEtudiant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieuNaissanceEtudiant;

    /**
     * @ORM\Column(type="boolean")
     */
    private $sexe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEtudiant(): ?string
    {
        return $this->nomEtudiant;
    }

    public function setNomEtudiant(string $nomEtudiant): self
    {
        $this->nomEtudiant = $nomEtudiant;

        return $this;
    }

    public function getPrenomEtudiant(): ?string
    {
        return $this->prenomEtudiant;
    }

    public function setPrenomEtudiant(string $prenomEtudiant): self
    {
        $this->prenomEtudiant = $prenomEtudiant;

        return $this;
    }

    public function getDateNaissanceEtudiant(): ?\DateTimeInterface
    {
        return $this->dateNaissanceEtudiant;
    }

    public function setDateNaissanceEtudiant(\DateTimeInterface $dateNaissanceEtudiant): self
    {
        $this->dateNaissanceEtudiant = $dateNaissanceEtudiant;

        return $this;
    }

    public function getLieuNaissanceEtudiant(): ?string
    {
        return $this->lieuNaissanceEtudiant;
    }

    public function setLieuNaissanceEtudiant(string $lieuNaissanceEtudiant): self
    {
        $this->lieuNaissanceEtudiant = $lieuNaissanceEtudiant;

        return $this;
    }

    public function getSexe(): ?bool
    {
        return $this->sexe;
    }

    public function setSexe(bool $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }
}
