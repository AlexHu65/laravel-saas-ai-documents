<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Application\Billing\SubscribeCompany;

class SubscriptionController extends Controller
{
    public function subscribe(Plan $plan)
    {
        $url = app(SubscribeCompany::class)
            ->execute(company(), $plan);

        return redirect($url);
    }
}
