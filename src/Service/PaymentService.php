<?php

namespace App\Service;

use App\Entity\Payment;
use App\Repository\PaymentRepository;

class PaymentService
{
    public function __construct(private PaymentRepository $repo) {}

    public function all(): array { return $this->repo->findAll(); }

    public function get(int $id): ?Payment { return $this->repo->find($id); }

    public function create(Payment $e): Payment { $this->repo->save($e); return $e; }
}
