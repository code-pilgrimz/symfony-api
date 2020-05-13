<?php

namespace App\Entity;

use App\Repository\OrganizationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrganizationRepository::class)]
#[ORM\Table(name: 'organizations')]
class Organization
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $name = "";
    #[ORM\Column(length: 255)]
    private string $slug = "";
    #[ORM\Column(length: 255)]
    private string $plan = "";
    #[ORM\Column]
    private int $seats = 0;

    public function getId(): ?int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function setName(string $name): static { $this->name = $name; return $this; }
    public function getSlug(): string { return $this->slug; }
    public function setSlug(string $slug): static { $this->slug = $slug; return $this; }
    public function getPlan(): string { return $this->plan; }
    public function setPlan(string $plan): static { $this->plan = $plan; return $this; }
    public function getSeats(): int { return $this->seats; }
    public function setSeats(int $seats): static { $this->seats = $seats; return $this; }
}
