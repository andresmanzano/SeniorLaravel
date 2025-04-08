<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            $response = Http::accept('application/json')->get('http://api.weatherapi.com/v1/current.json', [

                'key' => 'ba222923800b4b5a87e220159250604',        
                'q' => 'Cali',
                'lang' => Session::get('locale')
            
            ])->json();

           
            return view('home',[
                'temperaturec' => $response['current']['temp_c'],
                'temperaturef' => $response['current']['temp_f'],
                'condition' => $response['current']['condition']['text'],
                'wind_kph' => $response['current']['wind_kph'],
                'humidity' => $response['current']['humidity'],
                'localtime' => $response['location']['localtime'],
                'icon' => $response['current']['condition']['icon'], 
                'last_updated' => $response['current']['last_updated'],                       
            ]);
        }

        catch (\Exception $e) {
            // Manejar errores de la API
            return view('home', ['message' => 'No se pudo obtener la información del clima.']);
        }
    }
}
