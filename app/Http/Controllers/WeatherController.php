<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function index(Request $request)
    {
        // 仙台市の天気を取得する
        $latitude = 38.268223;
        $longtitude = 140.869415;
        $apiKey = config('services.openweathermap.api_key');
        $url = "https://api.openweathermap.org/data/2.5/weather?lat=$latitude&lon=$longtitude&lang=ja&appid=$apiKey";

        $method = "GET";

        $client = new Client();

        $response = $client->request($method, $url);

        $data = $response->getBody();
        $data = json_decode($data, true);

        //dd(response()->json($data));

        return response()->json($data);
    }
}
