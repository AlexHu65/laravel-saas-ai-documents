<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GenerateDocumentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_app_generated_document(): void
    {
        $company = \App\Models\Company::factory()->create();

        $user = \App\Models\User::factory()->create([
            'company_id' => $company->id,
        ]);

        $plan = \App\Models\Plan::factory()->create();

        $subscription = \App\Models\Subscription::create([
            'company_id' => $company->id,
            'plan_id' => $plan->id,
            'status' => 'active',
            'starts_at' => now(),
            'ends_at' => now()->addMonth(),
        ]);

        $payload = [
            'company_id' => $company->id,
            'user_id' => $user->id,
            'prompt' => "Test prompt",
        ];

        $this->app->bind(\App\Domain\AI\Contracts\AIProviderInterface::class, function () use ($payload) {
            return new class implements \App\Domain\AI\Contracts\AIProviderInterface {
                public function generateContent(array $payload): string
                {
                    return "Generated Document Title|This is the generated document content.";
                }
            };
        });

        $response = $this->app->make(\App\Application\AI\GenerateDocument::class)->execute($company, $user, "Test prompt");

        $this->assertDatabaseHas('documents', [
            'company_id' => $company->id,
            'user_id' => $user->id,
            'title' => 'Documento IA',
            'content' => "Generated Document Title|This is the generated document content.",
        ]);
    }
}
