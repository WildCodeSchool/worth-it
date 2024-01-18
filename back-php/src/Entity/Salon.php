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
    #[ORM\Column]
    private ?string $id = null;

    #[ORM\Column(length: 255)]
    private ?string $salonName = null;

    #[ORM\Column(length: 255)]
    private ?string $salonCity = null;

    #[ORM\OneToMany(mappedBy: 'salon', targetEntity: OrderLine::class)]
    private Collection $orderLines;

    public function __construct()
    {
        $this->orderLines = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, OrderLine>
     */
    public function getOrderLines(): Collection
    {
        return $this->orderLines;
    }

    public function addOrderLine(OrderLine $orderLine): static
    {
        if (!$this->orderLines->contains($orderLine)) {
            $this->orderLines->add($orderLine);
            $orderLine->setSalon($this);
        }

        return $this;
    }

    public function removeOrderLine(OrderLine $orderLine): static
    {
        if ($this->orderLines->removeElement($orderLine)) {
            // set the owning side to null (unless already changed)
            if ($orderLine->getSalon() === $this) {
                $orderLine->setSalon(null);
            }
        }

        return $this;
    }
}
