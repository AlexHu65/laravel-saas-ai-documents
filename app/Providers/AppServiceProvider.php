<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Billing\Contracts\PaymentGatewayInterface;
use App\Infrastructure\Billing\FakeGateway;
use App\Domain\AI\Contracts\AIProviderInterface;
use App\Infrastructure\AI\FakeAIProvider;
use App\Infrastructure\Billing\StripeGateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PaymentGatewayInterface::class, FakeGateway::class);
        $this->app->bind(AIProviderInterface::class, FakeAIProvider::class);
        $this->app->bind(PaymentGatewayInterface::class, StripeGateway::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
