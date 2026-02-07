<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Test routes
Route::get('/test-company-context', function () {
    return response()->json(['ok' => true]);
});
