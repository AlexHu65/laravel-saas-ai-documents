<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    public function run(): void
    {
        $subscriptions = [
            [
                'company_slug' => 'acme-corporation',
                'plan_name' => 'Pro',
                'status' => 'active',
                'starts_at' => '2026-01-01',
                'ends_at' => null,
            ],
            [
                'company_slug' => 'globex-industries',
                'plan_name' => 'Basic',
                'status' => 'active',
                'starts_at' => '2026-02-01',
                'ends_at' => null,
            ],
            [
                'company_slug' => 'initech-solutions',
                'plan_name' => 'Enterprise',
                'status' => 'active',
                'starts_at' => '2026-03-01',
                'ends_at' => null,
            ],
            [
                'company_slug' => 'initech-solutions',
                'plan_name' => 'Basic',
                'status' => 'cancelled',
                'starts_at' => '2025-09-01',
                'ends_at' => '2026-02-28',
            ],
        ];

        foreach ($subscriptions as $subscriptionData) {
            $company = Company::where('slug', $subscriptionData['company_slug'])->firstOrFail();
            $plan = Plan::where('name', $subscriptionData['plan_name'])->firstOrFail();

            Subscription::updateOrCreate(
                [
                    'company_id' => $company->id,
                    'plan_id' => $plan->id,
                    'status' => $subscriptionData['status'],
                    'starts_at' => $subscriptionData['starts_at'],
                ],
                [
                    'ends_at' => $subscriptionData['ends_at'],
                ]
            );
        }
    }
}
