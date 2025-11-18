# API Documentation

## Overview

This Laravel API provides location-based services for finding places of interest in Belgium. The API is designed specifically for CLI tools and API clients - browser access is restricted.

## Base URL

```
http://localhost:8000/api
```

## Authentication

Currently, no authentication is required. All endpoints are accessible to CLI/API clients.

## Available Endpoints

### 1. Get All Locations

**Endpoint:** `GET /locations`

**Description:** Retrieve all locations from the database.

**Response:**
```json
{
  "success": true,
  "data": [
    {
      "id": 1,
      "name": "Example Location",
      "description": "A sample location",
      "type": "restaurant",
      "category": "dining",
      "latitude": 50.8503,
      "longitude": 4.3517,
      "address": "Sample Address",
      "city": "Brussels",
      "postal_code": "1000",
      "phone": "+32 2 123 4567",
      "website": "https://example.com",
      "created_at": "2025-11-16T13:45:05.000000Z",
      "updated_at": "2025-11-16T13:45:05.000000Z"
    }
  ],
  "count": 1
}
```

### 2. Search Locations by Proximity

**Endpoint:** `GET /locations/search`

**Description:** Find locations near a specific point by type and distance.

**Parameters:**
- `latitude` (required): User's latitude (-90 to 90)
- `longitude` (required): User's longitude (-180 to 180)
- `search_type` (required): Type of location to search for
- `distance` (optional): Maximum distance in kilometers (default: 10)

**Valid search types:**
- `fun`
- `theater`
- `music`
- `medic`
- `restaurant`
- `bar`
- `museum`
- `park`

**Example Request:**
```bash
curl "http://localhost:8000/api/locations/search?latitude=50.8503&longitude=4.3517&search_type=restaurant&distance=5"
```

**Response:**
```json
{
  "success": true,
  "data": [
    {
      "id": 1,
      "name": "Restaurant Example",
      "description": "Great food",
      "type": "restaurant",
      "latitude": 50.8503,
      "longitude": 4.3517,
      "address": "Example Street 123",
      "city": "Brussels",
      "postal_code": "1000",
      "phone": "+32 2 123 4567",
      "website": "https://example.com",
      "distance": 0.5
    }
  ],
  "search_parameters": {
    "user_latitude": 50.8503,
    "user_longitude": 4.3517,
    "search_type": "restaurant",
    "max_distance_km": 5,
    "results_count": 1
  }
}
```

### 3. Get Available Types

**Endpoint:** `GET /locations/types`

**Description:** Get all available location types.

**Response:**
```json
{
  "success": true,
  "types": [
    "restaurant",
    "bar",
    "museum",
    "park",
    "theater",
    "music",
    "medic",
    "fun"
  ]
}
```

### 4. Get Locations by Type

**Endpoint:** `GET /locations/type/{type}`

**Description:** Get all locations of a specific type.

**Example Request:**
```bash
curl "http://localhost:8000/api/locations/type/restaurant"
```

**Response:**
```json
{
  "success": true,
  "data": [
    {
      "id": 1,
      "name": "Restaurant Example",
      "description": "Great food",
      "type": "restaurant",
      "latitude": 50.8503,
      "longitude": 4.3517,
      "address": "Example Street 123",
      "city": "Brussels",
      "postal_code": "1000",
      "phone": "+32 2 123 4567",
      "website": "https://example.com"
    }
  ]
}
```

### 5. Test Endpoint

**Endpoint:** `GET /test`

**Description:** Simple test endpoint to verify API connectivity.

**Response:**
```json
{
  "message": "This is an API-only test route"
}
```

## Error Responses

### Validation Errors (422)

```json
{
  "message": "The given data was invalid.",
  "errors": {
    "latitude": ["The latitude field is required."],
    "search_type": ["The selected search type is invalid."]
  }
}
```

### Not Found (404)

```json
{
  "message": "Not Found"
}
```

## Usage Examples

### Using cURL

```bash
# Get all locations
curl -X GET "http://localhost:8000/api/locations"

# Search for restaurants within 10km
curl -X GET "http://localhost:8000/api/locations/search?latitude=50.8503&longitude=4.3517&search_type=restaurant&distance=10"

# Get all available types
curl -X GET "http://localhost:8000/api/locations/types"

# Get all museums
curl -X GET "http://localhost:8000/api/locations/type/museum"

# Test API connectivity
curl -X GET "http://localhost:8000/api/test"
```

### Using HTTPie

```bash
# Get all locations
http GET localhost:8000/api/locations

# Search for nearby bars
http GET localhost:8000/api/locations/search latitude==50.8503 longitude==4.3517 search_type==bar distance==5
```

## Notes

- All responses use JSON format
- Distances are calculated using the Haversine formula
- The API is configured to only respond to CLI/API clients (browsers are blocked)
- Coordinates should use decimal degrees format
- Distance calculations are in kilometers