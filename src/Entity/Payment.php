<?php

namespace App\Entity;

use App\Repository\PaymentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaymentRepository::class)]
#[ORM\Table(name: 'payments')]
class Payment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private float $amount = 0;
    #[ORM\Column(length: 255)]
    private string $provider = "";
    #[ORM\Column(length: 255)]
    private string $status = "";
    #[ORM\Column(length: 255)]
    private string $reference = "";

    public function getId(): ?int { return $this->id; }
    public function getAmount(): float { return $this->amount; }
    public function setAmount(float $amount): static { $this->amount = $amount; return $this; }
    public function getProvider(): string { return $this->provider; }
    public function setProvider(string $provider): static { $this->provider = $provider; return $this; }
    public function getStatus(): string { return $this->status; }
    public function setStatus(string $status): static { $this->status = $status; return $this; }
    public function getReference(): string { return $this->reference; }
    public function setReference(string $reference): static { $this->reference = $reference; return $this; }
}
