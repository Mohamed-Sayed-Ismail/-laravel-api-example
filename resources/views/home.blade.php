<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel API Example - Location Services</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Figtree', ui-sans-serif, system-ui, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .header {
            text-align: center;
            margin-bottom: 3rem;
            color: white;
        }

        .header h1 {
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
        }

        .card h2 {
            color: #667eea;
            margin-bottom: 1rem;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .feature {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .feature h3 {
            color: #667eea;
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
        }

        .feature p {
            color: #666;
            font-size: 0.95rem;
        }

        .endpoints {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 1rem;
            margin: 1rem 0;
        }

        .endpoint {
            display: flex;
            align-items: center;
            padding: 0.5rem 0;
            border-bottom: 1px solid #e9ecef;
        }

        .endpoint:last-child {
            border-bottom: none;
        }

        .method {
            background: #28a745;
            color: white;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-right: 1rem;
            min-width: 60px;
            text-align: center;
        }

        .path {
            font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', monospace;
            color: #495057;
            margin-right: 1rem;
        }

        .description {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .code-block {
            background: #2d3748;
            color: #e2e8f0;
            padding: 1rem;
            border-radius: 8px;
            overflow-x: auto;
            margin: 1rem 0;
            font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', monospace;
            font-size: 0.9rem;
        }

        .note {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            color: #856404;
            padding: 1rem;
            border-radius: 8px;
            margin: 1rem 0;
        }

        .note strong {
            color: #533f03;
        }

        .github-link {
            text-align: center;
            margin-top: 2rem;
        }

        .github-link a {
            display: inline-block;
            background: #333;
            color: white;
            padding: 1rem 2rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s ease;
        }

        .github-link a:hover {
            background: #555;
        }

        .logo {
            width: 80px;
            height: 80px;
            margin: 0 auto 1rem;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .logo svg {
            width: 50px;
            height: 50px;
            fill: #667eea;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }
            
            .container {
                padding: 1rem;
            }
            
            .features {
                grid-template-columns: 1fr;
            }
            
            .endpoint {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .method {
                margin-bottom: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2L13.09 8.26L22 9L13.09 9.74L12 16L10.91 9.74L2 9L10.91 8.26L12 2Z"/>
                    <path d="M12 12L16 16L12 20L8 16L12 12Z"/>
                </svg>
            </div>
            <h1>Laravel API Example</h1>
            <p>Location-based services API for Belgium</p>
        </div>

        <div class="card">
            <h2>🌟 Welcome to Laravel API Example</h2>
            <p>This is a modern Laravel API project demonstrating best practices for building location-based REST APIs. The API provides comprehensive location services specifically designed for Belgium, with advanced proximity search capabilities and comprehensive location data management.</p>
        </div>

        <div class="features">
            <div class="feature">
                <h3>🗺️ Location Search</h3>
                <p>Advanced proximity-based search using the Haversine formula to find locations within specified distances from any coordinate point.</p>
            </div>
            <div class="feature">
                <h3>📍 8 Location Types</h3>
                <p>Support for restaurants, bars, museums, parks, theaters, music venues, medical facilities, and entertainment spots.</p>
            </div>
            <div class="feature">
                <h3>🔧 CLI/API Only</h3>
                <p>Designed specifically for developers - accessible via cURL, Postman, and other API clients, not browsers (except this home page!).</p>
            </div>
            <div class="feature">
                <h3>⚡ Modern Laravel</h3>
                <p>Built with the latest Laravel features including Eloquent ORM, migrations, seeders, and comprehensive API resource transformations.</p>
            </div>
        </div>

        <div class="card">
            <h2>📋 API Endpoints</h2>
            <p>The following endpoints are available for CLI/API clients:</p>
            
            <div class="endpoints">
                <div class="endpoint">
                    <span class="method">GET</span>
                    <span class="path">/api/locations</span>
                    <span class="description">List all locations</span>
                </div>
                <div class="endpoint">
                    <span class="method">GET</span>
                    <span class="path">/api/locations/search</span>
                    <span class="description">Search locations by proximity and type</span>
                </div>
                <div class="endpoint">
                    <span class="method">GET</span>
                    <span class="path">/api/locations/types</span>
                    <span class="description">Get all available location types</span>
                </div>
                <div class="endpoint">
                    <span class="method">GET</span>
                    <span class="path">/api/locations/type/{type}</span>
                    <span class="description">Get locations by specific type</span>
                </div>
                <div class="endpoint">
                    <span class="method">GET</span>
                    <span class="path">/api/test</span>
                    <span class="description">API connectivity test endpoint</span>
                </div>
            </div>

            <div class="note">
                <strong>Note:</strong> API endpoints are restricted to CLI tools and API clients only. Use cURL, Postman, HTTPie, or similar tools to access the API.
            </div>
        </div>

        <div class="card">
            <h2>🚀 Quick Start Example</h2>
            <p>Here's how to search for restaurants within 5km of Brussels city center:</p>
            
            <div class="code-block">curl "http://localhost:8000/api/locations/search?latitude=50.8503&longitude=4.3517&search_type=restaurant&distance=5"</div>
            
            <p>Test API connectivity:</p>
            <div class="code-block">curl "http://localhost:8000/api/test"</div>
            
            <p>Get all available location types:</p>
            <div class="code-block">curl "http://localhost:8000/api/locations/types"</div>
        </div>

        <div class="card">
            <h2>📖 Documentation</h2>
            <p>For complete API documentation with detailed examples, response formats, and parameter descriptions, check out:</p>
            <ul style="margin: 1rem 0; padding-left: 2rem;">
                <li><strong>API_DOCUMENTATION.md</strong> - Comprehensive API reference</li>
                <li><strong>README.md</strong> - Installation and setup guide</li>
            </ul>
        </div>

        <div class="github-link">
            <a href="https://github.com/Mohamed-Sayed-Ismail/laravel-api-example" target="_blank">
                View on GitHub
            </a>
        </div>
    </div>
</body>
</html>