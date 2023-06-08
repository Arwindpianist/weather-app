<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function show(Request $request)
    {
        $country = $request->input('country');

        $apiKey = '8f8c86e86d9f034b5e7ae745c4bcaf52'; // Replace with your weatherstack API key

        $url = "http://api.weatherstack.com/current?access_key={$apiKey}&query={$country}";

        $response = Http::get($url);

        $data = $response->json();

        return view('weather', ['data' => $data]);
    }
}
