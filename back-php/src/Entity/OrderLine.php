<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\OrderLineRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderLineRepository::class)]
#[ApiResource]
class OrderLine
{
    #[ORM\Id]
    #[ORM\Column]
    private ?string $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $productQuantity = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $productTotalPrice = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $productBasePrice = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $product = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $salon = null;


    public function setId(?string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getProductQuantity(): ?string
    {
        return $this->productQuantity;
    }

    public function setProductQuantity(?string $productQuantity): static
    {
        $this->productQuantity = $productQuantity;

        return $this;
    }

    public function getProductTotalPrice(): ?string
    {
        return $this->productTotalPrice;
    }

    public function setProductTotalPrice(?string $productTotalPrice): static
    {
        $this->productTotalPrice = $productTotalPrice;

        return $this;
    }

    public function getProductBasePrice(): ?string
    {
        return $this->productBasePrice;
    }

    public function setProductBasePrice(?string $productBasePrice): static
    {
        $this->productBasePrice = $productBasePrice;

        return $this;
    }

    public function getProduct(): ?string
    {
        return $this->product;
    }

    public function setProduct(?string $product): static
    {
        $this->product = $product;

        return $this;
    }

    public function getSalon(): ?string
    {
        return $this->salon;
    }

    public function setSalon(?string $salon): static
    {
        $this->salon = $salon;

        return $this;
    }

}
