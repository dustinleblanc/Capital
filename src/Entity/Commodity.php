<?php

namespace App\Entity;

use App\Repository\CommodityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommodityRepository::class)]
class Commodity implements CommodityInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?float $labor = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $useValue = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabor(): ?float
    {
        return $this->labor;
    }

    public function setLabor(?float $labor): static
    {
        $this->labor = $labor;

        return $this;
    }

    public function getUseValue(): ?string
    {
        return $this->useValue;
    }

    public function setUseValue(?string $useValue): static
    {
        $this->useValue = $useValue;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getRelativeValue(CommodityInterface $commodity, int $quantity): float
    {
        return $commodity->getLabor() / ($this->getLabor() * $quantity);
    }
}
