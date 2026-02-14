<?php

namespace App\Infrastructure\Billing;

use App\Domain\Billing\Contracts\PaymentGatewayInterface;

class FakeGateway implements PaymentGatewayInterface
{
    public function createCustomer(array $data): array
    {
        return [
            'id' => 'fake_customer_id_123'
        ];
    }

    public function createSubscription(array $data): array
    {
        return [
            'id' => 'fake_subscription_id_123',
        ];
    }

    public function cancelSubscription(string $externalId): bool
    {
        return true;
    }
}
