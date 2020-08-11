<?php

namespace App\Service;

use App\Entity\Invoice;
use App\Repository\InvoiceRepository;

class InvoiceService
{
    public function __construct(private InvoiceRepository $repo) {}

    public function all(): array { return $this->repo->findAll(); }

    public function get(int $id): ?Invoice { return $this->repo->find($id); }

    public function create(Invoice $e): Invoice { $this->repo->save($e); return $e; }
}
