<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Document;
use App\Models\User;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    public function run(): void
    {
        $documents = [
            [
                'company_slug' => 'acme-corporation',
                'user_email' => 'admin@acme.test',
                'title' => 'Manual de Operaciones',
                'content' => 'Procedimientos operativos estándar para el equipo de Acme Corporation.',
                'version' => 1,
                'status' => 'completed',
            ],
            [
                'company_slug' => 'acme-corporation',
                'user_email' => 'manager@acme.test',
                'title' => 'Guía de Onboarding',
                'content' => 'Pasos para integrar nuevos colaboradores en Acme Corporation.',
                'version' => 2,
                'status' => 'draft',
            ],
            [
                'company_slug' => 'acme-corporation',
                'user_email' => 'user@acme.test',
                'title' => 'Proceso de Facturación',
                'content' => 'Flujo de facturación mensual y validación de pagos.',
                'version' => 1,
                'status' => 'processing',
            ],
            [
                'company_slug' => 'globex-industries',
                'user_email' => 'admin@globex.test',
                'title' => 'Política de Seguridad',
                'content' => 'Lineamientos de seguridad de la información para Globex Industries.',
                'version' => 1,
                'status' => 'completed',
            ],
            [
                'company_slug' => 'initech-solutions',
                'user_email' => 'admin@initech.test',
                'title' => 'Documentación Técnica API',
                'content' => 'Especificación técnica de endpoints internos de Initech Solutions.',
                'version' => 3,
                'status' => 'completed',
            ],
        ];

        foreach ($documents as $documentData) {
            $company = Company::where('slug', $documentData['company_slug'])->firstOrFail();
            $user = User::where('email', $documentData['user_email'])->firstOrFail();

            Document::updateOrCreate(
                [
                    'company_id' => $company->id,
                    'title' => $documentData['title'],
                ],
                [
                    'user_id' => $user->id,
                    'content' => $documentData['content'],
                    'version' => $documentData['version'],
                    'status' => $documentData['status'],
                ]
            );
        }
    }
}
