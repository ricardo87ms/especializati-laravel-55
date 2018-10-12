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

        $flights = $flight->searchFlights($origin['id_airport'], $destination['id_airport'], $request->date);

        return view('site.search.search', [
            'title' => $title,
            'flights' => $flights,
            'origin' => $origin['name_city'],
            'destination' => $destination['name_city'],
            'date' => formatDateAndTime($request->date)
        ]);
    }

    public function detailsFlight($id)
    {
        if (!$flight = Flight::with(['origin', 'destination'])->find($id))
            return redirect()->back();

        $title = "Detalhes do voo {$flight->id}";

        return view('site.flights.details', compact('flight', 'title'));
    }
}
