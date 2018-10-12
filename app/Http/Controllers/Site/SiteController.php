<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;

class SiteController extends Controller
{
    public function index()
    {

        $title = 'Home Page';

        $cities = City::get(); 

        return view('site.home.index', compact('title', 'cities'));
    }

    public function promotions()
    {

        $title = 'Promoções';
        return view('site.promotions.list', compact('title'));
    }
}
