<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Company;
use App\Models\Plan;
use App\Models\Subscription;

class SubcriptionCompanyTest extends TestCase
{

    public function test_create_subscription(): void
    {
        $company = Company::factory()->create();
        $plan = Plan::factory()->create();

        $subscription = Subscription::create([
            'company_id' => $company->id,
            'plan_id' => $plan->id,
            'status' => 'active',
            'starts_at' => now(),
            'ends_at' => now()->addMonth(),
        ]);

        $this->assertDatabaseHas('subscriptions', [
            'company_id' => $company->id,
            'plan_id' => $plan->id,
            'status' => 'active',
        ]);
    }

    public function test_app_service_provider(): void
    {
        $company = Company::factory()->create();
        $plan = Plan::factory()->create();

        $this->app->bind(PaymentGatewayInterface::class, function () {
            return new class implements PaymentGatewayInterface {
                public function createCustomer(array $payload): array
                {
                    return ['id' => 'cust_test_123'];
                }

                public function createSubscription(array $payload): array
                {
                    return ['id' => 'sub_test_123'];
                }
            };
        });

        $this->app->make(\App\Application\Billing\SubscribeCompany::class)->execute($company, $plan);

        $this->assertDatabaseHas('subscriptions', [
            'company_id' => $company->id,
            'plan_id' => $plan->id,
            'status' => 'active',
        ]);
    }
}
