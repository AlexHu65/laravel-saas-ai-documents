<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;


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
