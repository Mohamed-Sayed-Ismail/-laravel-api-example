<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::post('/generate-api-key', function () {
    // Generate a realistic API key
    $apiKey = 'sk_live_' . 
        str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789')  . 
        substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789'), 0, 15) . 
        '_' . 
        substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789'), 0, 8);
    
    return response()->json([
        'success' => true,
        'api_key' => $apiKey,
        'message' => 'API key generated successfully',
        'instructions' => 'Use this key in the X-API-Key header or api_key query parameter'
    ]);
});
