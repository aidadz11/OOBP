<?php

namespace App\Http\Controllers;

use App\Models\Weather;

use Illuminate\Support\Facades\Http;


class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function getWeather()
    {
        $apiKey='83483851d6d05818c00e325c0d288e82';
        $city="Bihac";
        $response=Http::get("https://api.openweathermap.org/data/2.5/weather",[
            'q'=>$city,
            'appid'=>$apiKey,
        ]);
        $WeatherData=$response->json();
        return $WeatherData;
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
        //
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
