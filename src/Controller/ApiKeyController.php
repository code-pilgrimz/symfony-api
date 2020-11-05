<?php

namespace App\Controller;

use App\Service\ApiKeyService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api_keys')]
class ApiKeyController extends AbstractController
{
    public function __construct(private ApiKeyService $service) {}

    #[Route('', methods: ['GET'])]
    public function list(): JsonResponse { return $this->json($this->service->all()); }

    #[Route('/{id}', methods: ['GET'])]
    public function get(int $id): JsonResponse
    {
        $e = $this->service->get($id);
        return $e ? $this->json($e) : $this->json(['error' => 'not found'], 404);
    }
}
