<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CliOnly
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($this->shouldAllowAccess($request)) {
            return $next($request);
        }

        return response()->json([
            'success' => false,
            'error' => 'access_denied',
            'message' => 'This API is only accessible via command line tools like curl, Postman, etc.'
        ], 403);
    }

    /**
     * Determine if access should be allowed
     */
    private function shouldAllowAccess(Request $request): bool
    {
        // Always allow Artisan commands
        if (app()->runningInConsole()) {
            return true;
        }

        $userAgent = $request->header('User-Agent', '');
        $acceptHeader = $request->header('Accept', '');

        // Debug: Log the user agent (remove this in production)
        \Log::info('User-Agent: ' . $userAgent);
        \Log::info('Accept: ' . $acceptHeader);

        // Allow common CLI tools and API clients
        $allowedPatterns = [
            '/curl/i',
            '/wget/i',
            '/postman/i',
            '/insomnia/i',
            '/thunder-client/i',
            '/httpie/i',
            '/^$/i', // Empty user agent
            '/python/i',
            '/node/i',
            '/go/i',
            '/java/i',
        ];

        foreach ($allowedPatterns as $pattern) {
            if (preg_match($pattern, $userAgent)) {
                return true;
            }
        }

        // Allow requests that explicitly accept JSON or wildcard
        if (str_contains($acceptHeader, 'application/json') || 
            str_contains($acceptHeader, '*/*') ||
            empty($acceptHeader)) {
            return true;
        }

        // Allow requests from localhost (development)
        $ip = $request->ip();
        if (in_array($ip, ['127.0.0.1', '::1', 'localhost'])) {
            return true;
        }

        return false;
    }
}