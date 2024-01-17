<?php

namespace App\Entity;

use App\Repository\OrderLineRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderLineRepository::class)]
class OrderLine
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $salonId = null;

    #[ORM\Column]
    private ?int $productId = null;

    #[ORM\Column]
    private ?int $productQuantity = null;

    #[ORM\Column]
    private ?int $productTotalPrice = null;

    #[ORM\Column]
    private ?int $productBasePrice = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getSalonId(): ?int
    {
        return $this->salonId;
    }

    public function setSalonId(int $salonId): static
    {
        $this->salonId = $salonId;

        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function setProductId(int $productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    public function getProductQuantity(): ?int
    {
        return $this->productQuantity;
    }

    public function setProductQuantity(int $productQuantity): static
    {
        $this->productQuantity = $productQuantity;

        return $this;
    }

    public function getProductTotalPrice(): ?int
    {
        return $this->productTotalPrice;
    }

    public function setProductTotalPrice(int $productTotalPrice): static
    {
        $this->productTotalPrice = $productTotalPrice;

        return $this;
    }

    public function getProductBasePrice(): ?int
    {
        return $this->productBasePrice;
    }

    public function setProductBasePrice(int $productBasePrice): static
    {
        $this->productBasePrice = $productBasePrice;

        return $this;
    }
}
