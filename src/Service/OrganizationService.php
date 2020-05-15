<?php

namespace App\Service;

use App\Entity\Organization;
use App\Repository\OrganizationRepository;

class OrganizationService
{
    public function __construct(private OrganizationRepository $repo) {}

    public function all(): array { return $this->repo->findAll(); }

    public function get(int $id): ?Organization { return $this->repo->find($id); }

    public function create(Organization $e): Organization { $this->repo->save($e); return $e; }
}
