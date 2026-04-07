<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Company;
use App\Models\Plan;
use App\Models\Feature;
use App\Models\Subscription;

class CompanyHasPlansTests extends TestCase
{

    public function test_company_has_features()
    {
        $company = Company::factory()->create();
        $plan = Plan::factory()->create();
        $feature = Feature::factory()->create();

        $subscription = Subscription::create([
            'company_id' => $company->id,
            'plan_id' => $plan->id,
            'status' => 'active',
            'starts_at' => now(),
            'ends_at' => now()->addMonth(),
        ]);

        $this->assertTrue($company->hasFeature($feature->code));

        $this->assertFalse($company->hasFeature('not_existing_feature'));
    }
}
