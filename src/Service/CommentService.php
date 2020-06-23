<?php

namespace App\Service;

use App\Entity\Comment;
use App\Repository\CommentRepository;

class CommentService
{
    public function __construct(private CommentRepository $repo) {}

    public function all(): array { return $this->repo->findAll(); }

    public function get(int $id): ?Comment { return $this->repo->find($id); }

    public function create(Comment $e): Comment { $this->repo->save($e); return $e; }
}
