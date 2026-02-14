<?php

namespace App\Application\Billing;

use App\Domain\Billing\Contracts\PaymentGatewayInterface;
use App\Models\Company;
use App\Models\Plan;
use App\Models\Subscription;
use Carbon\Carbon;

class SubscribeCompany
{
    public function __construct(
        protected PaymentGatewayInterface $gateway
    ) {}

    public function execute(Company $company, Plan $plan): void
    {
        // 1. Crear cliente en el gateway de pago
        $customer = $this->gateway->createCustomer([
            'name' => $company->name,
        ]);

        // 2. Crear suscripción en el gateway de pago
        $externalSubscription = $this->gateway->createSubscription([
            'customer_id' => $customer['id'],
            'plan_id' => $plan->id,
        ]);

        // 3. Guardar suscripción en la base de datos
        Subscription::create([
            'company_id' => $company->id,
            'plan_id' => $plan->id,
            'status' => 'active',
            'starts_at' => Carbon::now(),
            'external_id' => $externalSubscription['id'],
        ]);
    }
}
