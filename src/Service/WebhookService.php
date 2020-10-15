<?php

namespace App\Service;

use App\Entity\Webhook;
use App\Repository\WebhookRepository;

class WebhookService
{
    public function __construct(private WebhookRepository $repo) {}

    public function all(): array { return $this->repo->findAll(); }

    public function get(int $id): ?Webhook { return $this->repo->find($id); }

    public function create(Webhook $e): Webhook { $this->repo->save($e); return $e; }
}
