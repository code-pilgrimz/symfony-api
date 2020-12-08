<?php

namespace App\Service;

use App\Entity\User;
use App\Repository\UserRepository;

class UserService
{
    public function __construct(private UserRepository $repo) {}

    public function all(): array { return $this->repo->findAll(); }

    public function get(int $id): ?User { return $this->repo->find($id); }

    public function create(User $e): User { $this->repo->save($e); return $e; }
}
// wip: flaky-test
