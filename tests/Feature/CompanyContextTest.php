<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Company;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CompanyContextTest extends TestCase
{
    use RefreshDatabase;

    public function test_company_context_is_set_for_authenticated_user(): void
    {
        $company = Company::factory()->create();
        $user = User::factory()->create([
            'company_id' => $company->id,
        ]);

        $response = $this
            ->actingAs($user)
            ->get('/test-company-context');

        $response->assertStatus(200);

        $this->assertTrue(app()->bound('company'));
        $this->assertSame($company->id, app('company')->id);
    }

    public function test_company_context_is_not_set_for_unauthenticated_user(): void
    {
        $response = $this->get('/test-company-context');

        $response->assertStatus(200);

        $this->assertFalse(app()->bound('company'));
    }

    public function test_company_context_is_not_set_when_user_has_no_company(): void
    {
        $user = User::factory()->create([
            'company_id' => null,
        ]);

        $response = $this
            ->actingAs($user)
            ->get('/test-company-context');

        $response->assertStatus(200);

        $this->assertFalse(app()->bound('company'));
    }
}
