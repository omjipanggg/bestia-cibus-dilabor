<?php

namespace App\Http\Controllers;

use App\Models\Weather;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Exception;

class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lat = $request->input('lat');
        $lon = $request->input('lon');

        $appid = env('OPENWEATHER_API_KEY');

        try {
            $response = Http::get('https://api.openweathermap.org/data/3.0/onecall', [
                'lat' => $lat,
                'lon' => $lon,
                'appid' => $appid
            ]);


            // $data = (new OpenWeather())->getForecastWeatherByCoords($lat, $lon);

            if (!$response->successful()) {
                return response()->json([
                    'code' => $response->status(),
                    'message' => 'Failed to fetched or store the weather data.'
                ], 500);
            }

            $json = $response->json();

            $weather = Weather::create([
                'lat' => $lat,
                'lon' => $lon,
                'lang' => 'en',
                'data' => json_encode($json)
            ]);

            return response()->json([
                'code' => $response->status(),
                'response' => $weather->toArray()
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'code' => 500,
                'message' => 'Failed to store weather data in the database: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Weather $weather)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Weather $weather)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Weather $weather)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Weather $weather)
    {
        //
    }
}
