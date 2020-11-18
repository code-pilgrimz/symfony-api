<?php

namespace App\Entity;

use App\Repository\AuditLogRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AuditLogRepository::class)]
#[ORM\Table(name: 'audit_logs')]
class AuditLog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $action = "";
    #[ORM\Column]
    private int $actor_id = 0;
    #[ORM\Column(length: 255)]
    private string $target = "";

    public function getId(): ?int { return $this->id; }
    public function getAction(): string { return $this->action; }
    public function setAction(string $action): static { $this->action = $action; return $this; }
    public function getActorId(): int { return $this->actor_id; }
    public function setActorId(int $actor_id): static { $this->actor_id = $actor_id; return $this; }
    public function getTarget(): string { return $this->target; }
    public function setTarget(string $target): static { $this->target = $target; return $this; }
}
