<?php

namespace App\Infrastructure\AI;

use App\Domain\AI\Contracts\AIProviderInterface;

class FakeAIProvider implements AIProviderInterface
{
    public function generateContent(array $payload): string
    {
       return "Documento generado con FakeAIProvider para el prompt: " . ($payload['prompt'] ?? 'sin prompt');
    }
}
