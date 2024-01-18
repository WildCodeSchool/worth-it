<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\SalonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SalonRepository::class)]
#[ApiResource]
class Salon
{
    #[ORM\Id]
    #[ORM\Column(length: 255)]
    private ?string $id = null;

    #[ORM\Column(length: 255)]
    private ?string $salonName = null;

    #[ORM\Column(length: 255)]
    private ?string $salonCity = null;


    #[ORM\Column(length: 255, nullable: true)]
    private ?string $postalCode = null;


    public function getId(): ?string
    {
        return $this->id;
    }

    public function getSalonName(): ?string
    {
        return $this->salonName;
    }

    public function setSalonName(string $salonName): static
    {
        $this->salonName = $salonName;

        return $this;
    }

    public function getSalonCity(): ?string
    {
        return $this->salonCity;
    }

    public function setSalonCity(string $salonCity): static
    {
        $this->salonCity = $salonCity;

        return $this;
    }



    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): static
    {
        $this->postalCode = $postalCode;

        return $this;
    }
}
