<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venue;

class VenueController extends Controller
{
    public static function data() {

    	return Venue::all();
    }

    public static function view($city) {

    
    	$cities = Venue::select('city')->groupBy('city')->get();

    	$venues = Venue::where('city', $city)->get();

    	return view('venues', compact('venues', 'cities'));
    }
}
