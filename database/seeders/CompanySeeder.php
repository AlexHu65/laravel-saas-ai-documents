<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        $companies = [
            ['name' => 'Acme Corporation', 'slug' => 'acme-corporation'],
            ['name' => 'Globex Industries', 'slug' => 'globex-industries'],
            ['name' => 'Initech Solutions', 'slug' => 'initech-solutions'],
        ];

        foreach ($companies as $company) {
            Company::updateOrCreate(
                ['slug' => $company['slug']],
                $company
            );
        }
    }
}
