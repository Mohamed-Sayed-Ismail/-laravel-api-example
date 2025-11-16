<?php

use App\Http\Controllers\LocationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// All API routes protected from browser access (CLI/API clients only)
Route::middleware('cli_only')->group(function () {
    // Location routes - accessible via curl, Postman, API clients
    Route::get('/locations', [LocationController::class, 'index']);
    Route::get('/locations/search', [LocationController::class, 'search']);
    Route::get('/locations/types', [LocationController::class, 'getTypes']);
    Route::get('/locations/type/{type}', [LocationController::class, 'getByType']);

    // Test route
    Route::get('/test', function () {
        return response()->json(['message' => 'This is an API-only test route']);
    });
});

// If you want to add API key protection as well, combine middlewares:
// Route::middleware(['cli_only', 'api_key'])->group(function () {
//     // Your protected routes here
// });