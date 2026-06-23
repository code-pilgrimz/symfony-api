<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaskRepository::class)]
#[ORM\Table(name: 'tasks')]
class Task
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $title = "";
    #[ORM\Column]
    private int $priority = 0;
    #[ORM\Column]
    private bool $done = false;
    #[ORM\Column(length: 255)]
    private string $due_date = "";

    public function getId(): ?int { return $this->id; }
    public function getTitle(): string { return $this->title; }
    public function setTitle(string $title): static { $this->title = $title; return $this; }
    public function getPriority(): int { return $this->priority; }
    public function setPriority(int $priority): static { $this->priority = $priority; return $this; }
    public function getDone(): bool { return $this->done; }
    public function setDone(bool $done): static { $this->done = $done; return $this; }
    public function getDueDate(): string { return $this->due_date; }
    public function setDueDate(string $due_date): static { $this->due_date = $due_date; return $this; }
}
// wip: oauth
