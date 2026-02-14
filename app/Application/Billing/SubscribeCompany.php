<?php

namespace App\Application\Billing;

use App\Domain\Billing\Contracts\PaymentGatewayInterface;
use App\Models\Company;
use App\Models\Plan;

class SubscribeCompany
{
    public function __construct(
        protected PaymentGatewayInterface $gateway
    ) {}

    public function execute(Company $company, Plan $plan): void
    {
        // Aquí solo dejamos la estructura
        // Implementación real en el siguiente paso
    }
}
