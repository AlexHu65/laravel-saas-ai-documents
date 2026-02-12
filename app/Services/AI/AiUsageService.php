<?php

namespace App\Services\AI;

use App\Models\Company;
use App\Services\Billing\BillingService;

class AiUsageService
{
    protected $billing;

    public function __construct(BillingService $billing)
    {
        $this->billing = $billing;
    }

    public function canMakeRequest(Company $company): bool
    {
        if (!$this->billing->validateActiveSubscription($company)) {
            return false;
        }

        $plan = $company->currentPlan();

        if (!$plan) {
            return false;
        }

        // Aquí podrías agregar lógica adicional para verificar límites de uso, etc.

        return true;
    }
}
