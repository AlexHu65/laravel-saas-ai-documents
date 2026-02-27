<?php

namespace Tests\Feature\Company;

use Tests\TestCase;
use App\Models\Company;
use App\Models\User;

class UserCompanyTest extends TestCase
{
    public function test_user_belongs_to_a_company()
    {
        $company = Company::factory()->create();

        $user = User::factory()->create([
            'company_id' => $company->id,
        ]);

        $this->assertNotNull($user->company);
        $this->assertSame($company->id, $user->company->id);
    }
}

