<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'users')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $email = "";
    #[ORM\Column(length: 255)]
    private string $full_name = "";
    #[ORM\Column]
    private bool $is_active = false;
    #[ORM\Column(length: 255)]
    private string $hashed_password = "";

    public function getId(): ?int { return $this->id; }
    public function getEmail(): string { return $this->email; }
    public function setEmail(string $email): static { $this->email = $email; return $this; }
    public function getFullName(): string { return $this->full_name; }
    public function setFullName(string $full_name): static { $this->full_name = $full_name; return $this; }
    public function getIsActive(): bool { return $this->is_active; }
    public function setIsActive(bool $is_active): static { $this->is_active = $is_active; return $this; }
    public function getHashedPassword(): string { return $this->hashed_password; }
    public function setHashedPassword(string $hashed_password): static { $this->hashed_password = $hashed_password; return $this; }
}
