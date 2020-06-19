<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentRepository::class)]
#[ORM\Table(name: 'comments')]
class Comment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $body = "";
    #[ORM\Column]
    private int $author_id = 0;
    #[ORM\Column]
    private bool $edited = false;

    public function getId(): ?int { return $this->id; }
    public function getBody(): string { return $this->body; }
    public function setBody(string $body): static { $this->body = $body; return $this; }
    public function getAuthorId(): int { return $this->author_id; }
    public function setAuthorId(int $author_id): static { $this->author_id = $author_id; return $this; }
    public function getEdited(): bool { return $this->edited; }
    public function setEdited(bool $edited): static { $this->edited = $edited; return $this; }
}
