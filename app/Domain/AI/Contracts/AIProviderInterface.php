<?php

namespace App\Domain\AI\Contracts;

interface AIProviderInterface
{
    public function generate(array $payload): string;
}

