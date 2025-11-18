<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    /**
     * Search locations by type and proximity
     */
    public function search(Request $request): JsonResponse
    {
        $request->validate([
            'latitude' => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180',
            'search_type' => 'required|string|in:fun,theater,music,medic,restaurant,bar,museum,park',
            'distance' => 'nullable|numeric|min:1'
        ]);

        $userLat = $request->latitude;
        $userLng = $request->longitude;
        $searchType = $request->search_type;
        $maxDistance = $request->distance ?? 10;

        // Haversine formula to calculate distance
        $locations = Location::where('type', $searchType)
            ->get()
            ->map(function ($location) use ($userLat, $userLng) {
                $distance = 6371 * acos(
                    cos(deg2rad($userLat)) * 
                    cos(deg2rad($location->latitude)) * 
                    cos(deg2rad($location->longitude) - deg2rad($userLng)) + 
                    sin(deg2rad($userLat)) * 
                    sin(deg2rad($location->latitude))
                );
                $location->distance = round($distance, 2);
                
                // Add Google Maps link if API key is configured
                if (config('app.api_key')) {
                    $location->google_maps_url = "https://www.google.com/maps?q={$location->latitude},{$location->longitude}";
                }
                
                return $location;
            })
            ->filter(function ($location) use ($maxDistance) {
                return $location->distance <= $maxDistance;
            })
            ->sortBy('distance')
            ->values();

        return response()->json([
            'success' => true,
            'data' => $locations,
            'search_parameters' => [
                'user_latitude' => $userLat,
                'user_longitude' => $userLng,
                'search_type' => $searchType,
                'max_distance_km' => $maxDistance,
                'results_count' => $locations->count()
            ]
        ]);
    }

    /**
     * Get all available location types
     */
    public function getTypes(): JsonResponse
    {
        $types = Location::select('type')
            ->distinct()
            ->pluck('type');

        return response()->json([
            'success' => true,
            'types' => $types
        ]);
    }

    /**
     * Get locations by type
     */
    public function getByType($type): JsonResponse
    {
        $locations = Location::where('type', $type)->get();

        // Add Google Maps links if API key is configured
        if (config('app.api_key')) {
            $locations = $locations->map(function ($location) {
                $location->google_maps_url = "https://www.google.com/maps?q={$location->latitude},{$location->longitude}";
                return $location;
            });
        }

        return response()->json([
            'success' => true,
            'data' => $locations
        ]);
    }

    /**
     * Display all locations
     */
    public function index(): JsonResponse
    {
        $locations = Location::all();
        
        // Add Google Maps links if API key is configured
        if (config('app.api_key')) {
            $locations = $locations->map(function ($location) {
                $location->google_maps_url = "https://www.google.com/maps?q={$location->latitude},{$location->longitude}";
                return $location;
            });
        }
        
        return response()->json([
            'success' => true,
            'data' => $locations,
            'count' => $locations->count()
        ]);
    }
}