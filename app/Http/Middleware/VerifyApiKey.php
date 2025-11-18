<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyApiKey
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $providedKey = $request->header('X-API-Key') ?? $request->query('api_key');
        $validKey = config('app.api_key');

        if (!$validKey) {
            // If no API key is configured, allow all requests
            return $next($request);
        }

        if (!$providedKey || $providedKey !== $validKey) {
            return response()->json([
                'success' => false,
                'error' => 'invalid_api_key',
                'message' => 'Valid API key required. Please provide your API key in the X-API-Key header or api_key query parameter.'
            ], 401);
        }

        return $next($request);
    }
}