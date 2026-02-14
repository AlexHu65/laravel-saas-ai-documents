<?php

namespace App\Domain\AI\Contracts;

interface AIProviderInterface
{
    public function generateContent(array $payload): string;
}

