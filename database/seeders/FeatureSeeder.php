<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    public function run(): void
    {
        $features = [
            ['code' => 'ai_generate', 'name' => 'Generación de documentos con IA'],
            ['code' => 'export_pdf', 'name' => 'Exportación a PDF'],
            ['code' => 'collaboration', 'name' => 'Colaboración en equipo'],
            ['code' => 'analytics', 'name' => 'Analítica de uso'],
            ['code' => 'priority_support', 'name' => 'Soporte prioritario'],
        ];

        foreach ($features as $feature) {
            Feature::updateOrCreate(
                ['code' => $feature['code']],
                $feature
            );
        }
    }
}
