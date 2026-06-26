<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocsController;
use App\Http\Controllers\StripeWebhookController;
use App\Http\Controllers\SubscriptionController;


Route::get('/docs-assets/{path}', function (string $path) {
    abort_if(str_contains($path, '..'), 404);

    $file = base_path('docs/assets/'.$path);
    abort_unless(is_file($file), 404);

    return response()->file($file);
})->where('path', '.*');

Route::get('/', [DocsController::class, 'index'])->name('home');
Route::get('/home', [DocsController::class, 'index']);
Route::get('/docs/{page}', [DocsController::class, 'show'])->name('docs.show');

// Test routes
Route::get('/test-company-context', function () {
    return response()->json(['ok' => true]);
});

Route::get('/test-company', function () {
    return response()->json([
        'auth' => auth()->check(),
        'user_id' => auth()->id(),
        'company_id' => auth()->user()?->company_id,
        'company' => company()?->id
    ]);
});

Route::get('/force-login', function () {
    $user = App\Models\User::first();
    auth()->login($user);
    return 'logged in';
});

Route::get('/test-company-relation', function () {
    $user = auth()->user();
    return response()->json([
        'auth' => auth()->check(),
        'user_id' => $user?->id,
        'company_id' => $user?->company_id,
        'company_relation' => $user?->company,
        'company' => company()?->id,
    ]);
});

// Prubea de roles
Route::get('/admin', function () {
    return 'Admin panel';
})->middleware('role:admin');

Route::get('/user', function () {
    return 'User panel';
})->middleware('role:user');

Route::get('/manager', function () {
    return 'Manager panel';
})->middleware('role:manager');

Route::get('/subscribe/{plan}', [SubscriptionController::class, 'subscribe']);

Route::post('/stripe/webhook', [StripeWebhookController::class, 'handle']);
