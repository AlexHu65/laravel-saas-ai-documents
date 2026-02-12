<?php

namespace App\Domain\Billing\Contracts;

interface PaymentGatewayInterface
{
    public function createCustomer(array $data): array;

    public function createSubscription(array $data): array;

    public function cancelSubscription(string $externalId): bool;
}
