<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    public function run(): void
    {
        $plans = [
            'Basic' => [
                'price_mxn' => 99,
                'ia_request_limit' => 100,
                'user_limit' => 1,
                'is_active' => true,
                'stripe_price_id' => null,
                'features' => [
                    'feature_a' => true,
                    'feature_b' => false,
                    'feature_c' => false,
                ],
                'feature_plan' => [
                    'ai_generate' => ['limit' => 50, 'is_enabled' => true],
                    'export_pdf' => ['limit' => 10, 'is_enabled' => true],
                    'collaboration' => ['limit' => null, 'is_enabled' => false],
                    'analytics' => ['limit' => null, 'is_enabled' => false],
                    'priority_support' => ['limit' => null, 'is_enabled' => false],
                ],
            ],
            'Pro' => [
                'price_mxn' => 499,
                'ia_request_limit' => 1000,
                'user_limit' => 10,
                'is_active' => true,
                'stripe_price_id' => 'price_demo_pro',
                'features' => [
                    'feature_a' => true,
                    'feature_b' => true,
                    'feature_c' => false,
                ],
                'feature_plan' => [
                    'ai_generate' => ['limit' => 500, 'is_enabled' => true],
                    'export_pdf' => ['limit' => 100, 'is_enabled' => true],
                    'collaboration' => ['limit' => 5, 'is_enabled' => true],
                    'analytics' => ['limit' => null, 'is_enabled' => true],
                    'priority_support' => ['limit' => null, 'is_enabled' => false],
                ],
            ],
            'Enterprise' => [
                'price_mxn' => 1999,
                'ia_request_limit' => 10000,
                'user_limit' => 100,
                'is_active' => true,
                'stripe_price_id' => 'price_demo_enterprise',
                'features' => [
                    'feature_a' => true,
                    'feature_b' => true,
                    'feature_c' => true,
                ],
                'feature_plan' => [
                    'ai_generate' => ['limit' => null, 'is_enabled' => true],
                    'export_pdf' => ['limit' => null, 'is_enabled' => true],
                    'collaboration' => ['limit' => null, 'is_enabled' => true],
                    'analytics' => ['limit' => null, 'is_enabled' => true],
                    'priority_support' => ['limit' => null, 'is_enabled' => true],
                ],
            ],
        ];

        foreach ($plans as $name => $data) {
            $featurePlan = $data['feature_plan'];
            unset($data['feature_plan']);

            $plan = Plan::updateOrCreate(
                ['name' => $name],
                $data
            );

            $syncData = [];
            foreach ($featurePlan as $code => $pivot) {
                $feature = Feature::where('code', $code)->first();
                if ($feature) {
                    $syncData[$feature->id] = [
                        'limit' => $pivot['limit'],
                        'is_enabled' => $pivot['is_enabled'],
                    ];
                }
            }

            $plan->features()->sync($syncData);
        }
    }
}
