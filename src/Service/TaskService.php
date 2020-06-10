<?php

namespace App\Service;

use App\Entity\Task;
use App\Repository\TaskRepository;

class TaskService
{
    public function __construct(private TaskRepository $repo) {}

    public function all(): array { return $this->repo->findAll(); }

    public function get(int $id): ?Task { return $this->repo->find($id); }

    public function create(Task $e): Task { $this->repo->save($e); return $e; }
}
