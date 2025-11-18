<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>API Key Generator - Laravel API</title>
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
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .container {
            max-width: 500px;
            width: 100%;
        }

        .header {
            text-align: center;
            margin-bottom: 2rem;
            color: white;
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
        }

        .card h2 {
            color: #667eea;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            font-weight: 600;
            text-align: center;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #555;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .generate-btn {
            width: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .generate-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .generate-btn:active {
            transform: translateY(0);
        }

        .api-key-display {
            margin-top: 2rem;
            padding: 1.5rem;
            background: #f8f9fa;
            border-radius: 8px;
            border: 2px dashed #667eea;
            display: none;
        }

        .api-key-display.show {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        .api-key-display h3 {
            color: #667eea;
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        .api-key {
            background: #2d3748;
            color: #68d391;
            padding: 1rem;
            border-radius: 6px;
            font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', monospace;
            font-size: 0.9rem;
            word-break: break-all;
            margin-bottom: 1rem;
        }

        .copy-btn {
            background: #667eea;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: background 0.3s ease;
        }

        .copy-btn:hover {
            background: #5a6fd8;
        }

        .note {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            color: #856404;
            padding: 1rem;
            border-radius: 8px;
            margin-top: 1.5rem;
            font-size: 0.9rem;
        }

        .note strong {
            color: #533f03;
        }

        .logo {
            width: 60px;
            height: 60px;
            margin: 0 auto 1rem;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .logo svg {
            width: 40px;
            height: 40px;
            fill: #667eea;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }
            
            .card {
                padding: 1.5rem;
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
            <h1>API Key Generator</h1>
            <p>Generate your API key to access location services</p>
        </div>

        <div class="card">
            <h2>🔑 Generate API Key</h2>
            
            <form id="apiKeyForm">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                </div>
                
                <div class="form-group">
                    <label for="purpose">Purpose</label>
                    <select id="purpose" name="purpose" required>
                        <option value="">Select usage purpose</option>
                        <option value="development">Development</option>
                        <option value="production">Production</option>
                        <option value="testing">Testing</option>
                        <option value="personal">Personal Use</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="project">Project Name</label>
                    <input type="text" id="project" name="project" placeholder="Enter your project name" required>
                </div>

                <button type="submit" class="generate-btn">
                    Generate API Key
                </button>
            </form>

            <!-- API Examples Section -->
            <div style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #e2e8f0;">
                <h3 style="color: #667eea; margin-bottom: 1rem;">📋 API Usage Examples</h3>
                
                <div style="margin-bottom: 1.5rem;">
                    <h4 style="font-size: 1rem; margin-bottom: 0.5rem; color: #555;">Without API Key (Basic Response):</h4>
                    <div style="background: #2d3748; color: #e2e8f0; padding: 1rem; border-radius: 6px; font-family: monospace; font-size: 0.85rem; overflow-x: auto;">
curl "http://localhost:8000/api/locations/search?latitude=50.8503&longitude=4.3517&search_type=restaurant&distance=5"

{
  "success": true,
  "data": [{
    "id": 1,
    "name": "Restaurant Example",
    "latitude": 50.8503,
    "longitude": 4.3517,
    "distance": 0.5
  }]
}
                    </div>
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <h4 style="font-size: 1rem; margin-bottom: 0.5rem; color: #555;">With API Key (Enhanced Response + Google Maps):</h4>
                    <div style="background: #2d3748; color: #e2e8f0; padding: 1rem; border-radius: 6px; font-family: monospace; font-size: 0.85rem; overflow-x: auto;">
curl -H "X-API-Key: your_api_key_here" "http://localhost:8000/api/locations/search?latitude=50.8503&longitude=4.3517&search_type=restaurant&distance=5"

{
  "success": true,
  "data": [{
    "id": 1,
    "name": "Restaurant Example", 
    "latitude": 50.8503,
    "longitude": 4.3517,
    "distance": 0.5,
    <span style="color: #68d391;">"google_maps_url": "https://www.google.com/maps?q=50.8503,4.3517"</span>
  }]
}
                    </div>
                </div>
            </div>

            <div id="apiKeyDisplay" class="api-key-display">
                <h3>✅ Your API Key has been generated:</h3>
                <div id="apiKey" class="api-key">Loading...</div>
                <button id="copyBtn" class="copy-btn">Copy to Clipboard</button>
                <div class="note">
                    <strong>Important:</strong> Store this API key securely. You won't be able to see it again. Use it in the <code>X-API-Key</code> header for all API requests.
                    <br><br>
                    <strong>✨ Enhanced Features:</strong> When using your API key, location responses will include Google Maps links for easy navigation to each location!
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('apiKeyForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const purpose = document.getElementById('purpose').value;
            const project = document.getElementById('project').value;
            
            // Show loading state
            const apiKeyElement = document.getElementById('apiKey');
            apiKeyElement.textContent = 'Generating...';
            document.getElementById('apiKeyDisplay').classList.add('show');
            
            // Make API call to generate key
            fetch('/generate-api-key', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                },
                body: JSON.stringify({
                    email: email,
                    purpose: purpose,
                    project: project
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    apiKeyElement.textContent = data.api_key;
                } else {
                    apiKeyElement.textContent = 'Error generating API key';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                apiKeyElement.textContent = 'Error generating API key';
            });
        });

        document.getElementById('copyBtn').addEventListener('click', function() {
            const apiKey = document.getElementById('apiKey').textContent;
            navigator.clipboard.writeText(apiKey).then(() => {
                const originalText = this.textContent;
                this.textContent = 'Copied!';
                setTimeout(() => {
                    this.textContent = originalText;
                }, 2000);
            });
        });
    </script>
</body>
</html><?php /**PATH /home/mohamed/Software/laravel-api-example/resources/views/home.blade.php ENDPATH**/ ?>