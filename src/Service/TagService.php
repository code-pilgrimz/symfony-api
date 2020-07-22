<?php

namespace App\Service;

use App\Entity\Tag;
use App\Repository\TagRepository;

class TagService
{
    public function __construct(private TagRepository $repo) {}

    public function all(): array { return $this->repo->findAll(); }

    public function get(int $id): ?Tag { return $this->repo->find($id); }

    public function create(Tag $e): Tag { $this->repo->save($e); return $e; }
}
