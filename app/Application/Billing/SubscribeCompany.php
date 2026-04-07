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

    public function execute(Company $company, Plan $plan): string
    {
        $customer = $this->gateway->createCustomer([
            'name' => $company->name,
        ]);

        $subscription = $this->gateway->createSubscription([
            'customer_id' => $customer['id'],
            'price_id' => $plan->stripe_price_id,
        ]);

        return $subscription['url'];
    }
}
