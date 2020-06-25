<?php

namespace App\Controller;

use App\Service\CommentService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/comments')]
class CommentController extends AbstractController
{
    public function __construct(private CommentService $service) {}

    #[Route('', methods: ['GET'])]
    public function list(): JsonResponse { return $this->json($this->service->all()); }

    #[Route('/{id}', methods: ['GET'])]
    public function get(int $id): JsonResponse
    {
        $e = $this->service->get($id);
        return $e ? $this->json($e) : $this->json(['error' => 'not found'], 404);
    }
}
