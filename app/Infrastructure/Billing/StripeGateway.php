<?php

namespace App\Infrastructure\Billing;

use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Domain\Billing\Contracts\PaymentGatewayInterface;

class StripeGateway implements PaymentGatewayInterface
{
    public function __construct()
    {
        Stripe::setApiKey(config('services.stripe.secret'));
    }

    public function createCustomer(array $data): array
    {
        $customer = \Stripe\Customer::create([
            'name' => $data['name'],
        ]);

        return ['id' => $customer->id];
    }

    public function createSubscription(array $data): array
    {
        $session = Session::create([
            'mode' => 'subscription',
            'customer' => $data['customer_id'],
            'line_items' => [[
                'price' => $data['price_id'],
                'quantity' => 1,
            ]],
            'metadata' => [
                'company_id' => $data['company_id'],
                'plan_id' => $data['plan_id'],
            ],
            'success_url' => url('/success'),
            'cancel_url' => url('/cancel'),
        ]);

        return [
            'id' => $session->id,
            'url' => $session->url,
        ];
    }

    public function cancelSubscription(string $externalId): bool{

        \Stripe\Subscription::update($externalId, [
            'cancel_at_period_end' => true,
        ]);

        return true;
    }
}
