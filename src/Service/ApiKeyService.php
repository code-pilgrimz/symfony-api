<?php

namespace App\Service;

use App\Entity\ApiKey;
use App\Repository\ApiKeyRepository;

class ApiKeyService
{
    public function __construct(private ApiKeyRepository $repo) {}

    public function all(): array { return $this->repo->findAll(); }

    public function get(int $id): ?ApiKey { return $this->repo->find($id); }

    public function create(ApiKey $e): ApiKey { $this->repo->save($e); return $e; }
}
