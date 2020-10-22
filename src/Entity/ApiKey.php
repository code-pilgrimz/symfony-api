<?php

namespace App\Entity;

use App\Repository\ApiKeyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ApiKeyRepository::class)]
#[ORM\Table(name: 'api_keys')]
class ApiKey
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $name = "";
    #[ORM\Column(length: 255)]
    private string $prefix = "";
    #[ORM\Column]
    private bool $revoked = false;

    public function getId(): ?int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function setName(string $name): static { $this->name = $name; return $this; }
    public function getPrefix(): string { return $this->prefix; }
    public function setPrefix(string $prefix): static { $this->prefix = $prefix; return $this; }
    public function getRevoked(): bool { return $this->revoked; }
    public function setRevoked(bool $revoked): static { $this->revoked = $revoked; return $this; }
}
