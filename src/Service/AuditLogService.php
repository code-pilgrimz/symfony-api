<?php

namespace App\Service;

use App\Entity\AuditLog;
use App\Repository\AuditLogRepository;

class AuditLogService
{
    public function __construct(private AuditLogRepository $repo) {}

    public function all(): array { return $this->repo->findAll(); }

    public function get(int $id): ?AuditLog { return $this->repo->find($id); }

    public function create(AuditLog $e): AuditLog { $this->repo->save($e); return $e; }
}
