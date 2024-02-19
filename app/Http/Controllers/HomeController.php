<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenWeather;

class HomeController extends Controller
{
	public function index() {
		$context = [];
		return view('pages.home', $context);
	}

	public function fetchWeather(Request $request) {
		$lat = $request->input('lat');
		$lon = $request->input('lon');
		$data = (new OpenWeather())->getForecastWeatherByCoords($lat, $lon);
		return response()->json($data);
	}
}
