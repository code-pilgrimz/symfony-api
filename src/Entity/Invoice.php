<?php

namespace App\Entity;

use App\Repository\InvoiceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InvoiceRepository::class)]
#[ORM\Table(name: 'invoices')]
class Invoice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $number = "";
    #[ORM\Column]
    private float $amount = 0;
    #[ORM\Column(length: 255)]
    private string $currency = "";
    #[ORM\Column]
    private bool $paid = false;

    public function getId(): ?int { return $this->id; }
    public function getNumber(): string { return $this->number; }
    public function setNumber(string $number): static { $this->number = $number; return $this; }
    public function getAmount(): float { return $this->amount; }
    public function setAmount(float $amount): static { $this->amount = $amount; return $this; }
    public function getCurrency(): string { return $this->currency; }
    public function setCurrency(string $currency): static { $this->currency = $currency; return $this; }
    public function getPaid(): bool { return $this->paid; }
    public function setPaid(bool $paid): static { $this->paid = $paid; return $this; }
}
