<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Str;


class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $company = Company::updateOrCreate([
            'name' => 'Acme Corporation',
            'slug' => Str::slug('Acme Corporation'),
        ]);

        $user = [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
        ];

        if (!User::where('email', $user['email'])->exists()) {
            User::factory()->create([
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'company_id' => $company->id,
            ]);
        }
    }
}
