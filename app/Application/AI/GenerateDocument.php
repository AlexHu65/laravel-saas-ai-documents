<?php

namespace App\Application\AI;

use App\Domain\AI\Contracts\AIProviderInterface;
use App\Models\AIUsage;
use App\Models\Company;
use App\Models\User;
use App\Models\Document;
use Carbon\Carbon;

class GenerateDocument
{

    public function __construct(
            protected AIProviderInterface $provider
        ) {}

    public function execute(Company $company, User $user, string $prompt): Document
    {
        $subscription = $company->activeSubscription;

        if (!$subscription) {
            throw new \Exception("No active subscription found for the company.");
        }

        $plan = $subscription->plan;

        $currentUsage = $company->aiUsages()
            ->whereMonth('created_at', Carbon::now()->month)
            ->count();

        if ($currentUsage >= $plan->ia_request_limit) {
            throw new \Exception("AI request limit reached for the current billing cycle.");
        }

        $content = $this->provider->generateContent([
            'prompt' => $prompt
        ]);

        $document = Document::create([
            'company_id' => $company->id,
            'user_id' => $user->id,
            'title' => 'Documento IA',
            'content' => $content,
            'version' => 1,
            'status' => 'draft',
        ]);

        AIUsage::create([
            'company_id' => $company->id,
            'user_id' => $user->id,
            'tokens_used' => 100,
            'type' => 'document'
        ]);

        return $document;

    }
}
