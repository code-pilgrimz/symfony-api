<?php

namespace App\Entity;

use App\Repository\WebhookRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WebhookRepository::class)]
#[ORM\Table(name: 'webhooks')]
class Webhook
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $url = "";
    #[ORM\Column(length: 255)]
    private string $event = "";
    #[ORM\Column]
    private bool $active = false;
    #[ORM\Column(length: 255)]
    private string $secret = "";

    public function getId(): ?int { return $this->id; }
    public function getUrl(): string { return $this->url; }
    public function setUrl(string $url): static { $this->url = $url; return $this; }
    public function getEvent(): string { return $this->event; }
    public function setEvent(string $event): static { $this->event = $event; return $this; }
    public function getActive(): bool { return $this->active; }
    public function setActive(bool $active): static { $this->active = $active; return $this; }
    public function getSecret(): string { return $this->secret; }
    public function setSecret(string $secret): static { $this->secret = $secret; return $this; }
}
