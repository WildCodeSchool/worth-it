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
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $productQuantity = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $productTotalPrice = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $productBasePrice = null;

    #[ORM\ManyToOne(inversedBy: 'orderLines')]
    private ?Salon $salon = null;

    #[ORM\ManyToMany(targetEntity: Product::class, inversedBy: 'orderLines')]
    private Collection $product;

    public function __construct()
    {
        $this->product = new ArrayCollection();
    }

    public function getId(): ?int
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

    public function getSalon(): ?Salon
    {
        return $this->salon;
    }

    public function setSalon(?Salon $salon): static
    {
        $this->salon = $salon;

        return $this;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProduct(): Collection
    {
        return $this->product;
    }

    public function addProduct(Product $product): static
    {
        if (!$this->product->contains($product)) {
            $this->product->add($product);
        }

        return $this;
    }

    public function removeProduct(Product $product): static
    {
        $this->product->removeElement($product);

        return $this;
    }
}
