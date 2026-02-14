<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Billing\Contracts\PaymentGatewayInterface;
use App\Infrastructure\Billing\FakeGateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PaymentGatewayInterface::class, FakeGateway::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
