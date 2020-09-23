<?php

namespace App\Service;

use App\Entity\Notification;
use App\Repository\NotificationRepository;

class NotificationService
{
    public function __construct(private NotificationRepository $repo) {}

    public function all(): array { return $this->repo->findAll(); }

    public function get(int $id): ?Notification { return $this->repo->find($id); }

    public function create(Notification $e): Notification { $this->repo->save($e); return $e; }
}
