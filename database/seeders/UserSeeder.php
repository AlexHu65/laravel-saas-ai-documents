<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $demoPassword = Hash::make('password');

        $users = [
            [
                'name' => 'Admin Acme',
                'email' => 'admin@acme.test',
                'company_slug' => 'acme-corporation',
                'roles' => ['admin'],
            ],
            [
                'name' => 'Manager Acme',
                'email' => 'manager@acme.test',
                'company_slug' => 'acme-corporation',
                'roles' => ['manager'],
            ],
            [
                'name' => 'User Acme',
                'email' => 'user@acme.test',
                'company_slug' => 'acme-corporation',
                'roles' => ['user'],
            ],
            [
                'name' => 'Admin Globex',
                'email' => 'admin@globex.test',
                'company_slug' => 'globex-industries',
                'roles' => ['admin'],
            ],
            [
                'name' => 'User Globex',
                'email' => 'user@globex.test',
                'company_slug' => 'globex-industries',
                'roles' => ['user'],
            ],
            [
                'name' => 'Admin Initech',
                'email' => 'admin@initech.test',
                'company_slug' => 'initech-solutions',
                'roles' => ['admin'],
            ],
        ];

        foreach ($users as $userData) {
            $company = Company::where('slug', $userData['company_slug'])->firstOrFail();
            $roles = $userData['roles'];
            unset($userData['company_slug'], $userData['roles']);

            $user = User::updateOrCreate(
                ['email' => $userData['email']],
                [
                    ...$userData,
                    'company_id' => $company->id,
                    'password' => $demoPassword,
                    'email_verified_at' => now(),
                ]
            );

            $roleIds = Role::whereIn('name', $roles)->pluck('id');
            $user->roles()->syncWithoutDetaching($roleIds);
        }
    }
}
