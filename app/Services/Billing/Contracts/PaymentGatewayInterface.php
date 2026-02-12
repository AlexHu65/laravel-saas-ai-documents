<?php

namespace App\Services\Billing\Contracts;


interface PaymentGatewayInterface
{
    public function createCustomer(array $data): array;

    public function createSubscription(array $data): array;

    public function cancelSubscription(string $externalId): bool;

    public function handleWebhook(array $payload): void;
}
