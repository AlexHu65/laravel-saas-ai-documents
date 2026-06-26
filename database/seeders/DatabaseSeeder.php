<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            FeatureSeeder::class,
            PlanSeeder::class,
            CompanySeeder::class,
            UserSeeder::class,
            SubscriptionSeeder::class,
            DocumentSeeder::class,
            AIUsageSeeder::class,
        ]);
    }
}
