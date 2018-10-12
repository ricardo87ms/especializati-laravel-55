<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Flight;
use App\Models\Airport;

class SiteController extends Controller
{
    public function index()
    {

        $title = 'Home Page';

        $airports = Airport::with('city')->get(); 

        return view('site.home.index', compact('title', 'airports'));
    }

    public function promotions()
    {

        $title = 'Promoções';
        return view('site.promotions.list', compact('title'));
    }

    public function search(Request $request, Flight $flight)
    {
        $title = 'Resultado da Pesquisa';

        $origin = getInfoAirport($request->origin);
        $destination = getInfoAirport($request->destination);

        $flights = $flight->searchFlights($origin['id_city'], $destination['id_city'], $request->date);

        return view('site.results.search', compact('title', 'flights'));
    }
}
