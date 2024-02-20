<?php

namespace App\Http\Controllers;

use App\Models\Weather;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use OpenWeather;

class HomeController extends Controller
{
	public function index() {
		$context = [];

		return view('pages.home', $context);
	}
}
