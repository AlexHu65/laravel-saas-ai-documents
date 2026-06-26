<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Webhook;
use Stripe\Exception\SignatureVerificationException;
use App\Models\Company;
use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Support\Facades\Log;


class StripeWebhookController extends Controller
{
    public function handle(Request $request)
    {
        $payload = $request->getContent();
        $sigHeader = $request->header('Stripe-Signature');
        $secret = config('services.stripe.webhook_secret');

        try {
            $event = Webhook::constructEvent($payload, $sigHeader, $secret);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Invalid payload'], 400);
        }

        if($event->type === 'checkout.session.completed') {
            Log::info('Checkout session completed', ['event' => $event]);
            $session = $event->data->object;
            $companyId = $session->metadata->company_id ?? null;
            $planId = $session->metadata->plan_id ?? null;

            if(!$companyId && !$planId) {
                return response()->json(['error' => 'Missing metadata'], 400);
            }

            Log::info('Company ID', ['companyId' => $companyId]);

            $company = Company::find($companyId);
            $plan = Plan::find($planId);

            Log::info('Company', ['company' => $company]);
            Log::info('Plan', ['plan' => $plan]);

            if (!$company || !$plan) {
                return response()->json(['error' => 'Invalid data'], 400);
            }

            $subscription = Subscription::create([
                'company_id' => $company->id,
                'plan_id' => $plan->id,
                'status' => 'active',
                'starts_at' => now(),
                'external_id' => $session->subscription,
            ]);

            Log::info('Subscription', ['subscription' => $subscription]);

            return response()->json(['status' => 'success']);

        }
    }
}
