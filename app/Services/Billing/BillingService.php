<?php


namespace App\Services\Billing;

use App\Models\Company;

class BillingService
{
    protected $gateway;

    public function __construct($gateway)
    {
        $this->gateway = $gateway;
    }

    public function subscribe(Company $company, $plan)
    {
        // 1. Crear cliente en el gateway de pago
        $customer = $this->gateway->createCustomer([
            'name' => $company->name,
        ]);

        // 2. Crear suscripción en el gateway de pago
        $subscription = $this->gateway->createSubscription([
            'customer_id' => $customer['id'],
            'plan_id' => $plan->id,
        ]);
    }

    public function validateActiveSubscription(Company $company): bool
    {
        return $company->activeSubscription()->exists();
    }
}
