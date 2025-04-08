<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeatherDataRequest;
use App\Http\Requests\UpdateWeatherDataRequest;
use App\Models\WeatherData;

class WeatherDataController extends Controller
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
    public function store(StoreWeatherDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WeatherData $weatherData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WeatherData $weatherData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWeatherDataRequest $request, WeatherData $weatherData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WeatherData $weatherData)
    {
        //
    }
}
