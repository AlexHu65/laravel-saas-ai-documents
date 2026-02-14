<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Plan::updateOrCreate([
            'name' => 'Basic',
            'price_mxn' => 99,
            'ia_request_limit' => 100,
            'user_limit' => 1,
            'is_active' => true,
            'features' => [
            'feature_a' => true,
            'feature_b' => false,
            'feature_c' => false,
            ],
        ]);

        Plan::updateOrCreate([
            'name' => 'Pro',
            'price_mxn' => 499,
            'ia_request_limit' => 1000,
            'user_limit' => 10,
            'is_active' => true,
            'features' => [
            'feature_a' => true,
            'feature_b' => true,
            'feature_c' => false,
            ],
        ]);

        Plan::updateOrCreate([
            'name' => 'Enterprise',
            'price_mxn' => 1999,
            'ia_request_limit' => 10000,
            'user_limit' => 100,
            'is_active' => true,
            'features' => [
                'feature_a' => true,
                'feature_b' => true,
                'feature_c' => true,
            ],
        ]);
    }
}
