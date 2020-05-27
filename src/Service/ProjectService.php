<?php

namespace App\Service;

use App\Entity\Project;
use App\Repository\ProjectRepository;

class ProjectService
{
    public function __construct(private ProjectRepository $repo) {}

    public function all(): array { return $this->repo->findAll(); }

    public function get(int $id): ?Project { return $this->repo->find($id); }

    public function create(Project $e): Project { $this->repo->save($e); return $e; }
}
