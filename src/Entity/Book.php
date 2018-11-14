<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BookRepository")
 */
class Book
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $pocetStran;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $autor;

    /**
     * @ORM\Column(type="integer")
     */
    private $rokVydani;

    /**
     * @ORM\Column(type="integer")
     */
    private $cena;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPocetStran(): ?int
    {
        return $this->pocetStran;
    }

    public function setPocetStran(int $pocetStran): self
    {
        $this->pocetStran = $pocetStran;

        return $this;
    }

    public function getAutor(): ?string
    {
        return $this->autor;
    }

    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    public function getRokVydani(): ?int
    {
        return $this->rokVydani;
    }

    public function setRokVydani(int $rokVydani): self
    {
        $this->rokVydani = $rokVydani;

        return $this;
    }

    public function getCena(): ?int
    {
        return $this->cena;
    }

    public function setCena(int $cena): self
    {
        $this->cena = $cena;

        return $this;
    }
}
