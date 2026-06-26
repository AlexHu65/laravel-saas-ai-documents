<?php

namespace Database\Seeders;

use App\Models\AIUsage;
use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;

class AIUsageSeeder extends Seeder
{
    public function run(): void
    {
        $usages = [
            [
                'company_slug' => 'acme-corporation',
                'user_email' => 'admin@acme.test',
                'tokens_used' => 1250,
                'type' => 'document_generation',
            ],
            [
                'company_slug' => 'acme-corporation',
                'user_email' => 'manager@acme.test',
                'tokens_used' => 820,
                'type' => 'summary',
            ],
            [
                'company_slug' => 'acme-corporation',
                'user_email' => 'user@acme.test',
                'tokens_used' => 430,
                'type' => 'optimization',
            ],
            [
                'company_slug' => 'globex-industries',
                'user_email' => 'admin@globex.test',
                'tokens_used' => 600,
                'type' => 'document_generation',
            ],
            [
                'company_slug' => 'initech-solutions',
                'user_email' => 'admin@initech.test',
                'tokens_used' => 3400,
                'type' => 'document_generation',
            ],
            [
                'company_slug' => 'initech-solutions',
                'user_email' => 'admin@initech.test',
                'tokens_used' => 980,
                'type' => 'summary',
            ],
        ];

        foreach ($usages as $usageData) {
            $company = Company::where('slug', $usageData['company_slug'])->firstOrFail();
            $user = User::where('email', $usageData['user_email'])->firstOrFail();

            AIUsage::updateOrCreate(
                [
                    'company_id' => $company->id,
                    'user_id' => $user->id,
                    'type' => $usageData['type'],
                    'tokens_used' => $usageData['tokens_used'],
                ],
                []
            );
        }
    }
}
