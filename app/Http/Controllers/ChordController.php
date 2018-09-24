<?php

namespace App\Http\Controllers;

use App\Venue;
use App\User;
use App\Admin;
use Illuminate\Http\Request;

class ChordController extends Controller {


    public static function index() {
        return view('index');          
    }

    public function venuesView()
	{
		$venues = Venue::orderBy('name')->get();

		// show them!
		return view('venues', compact('venues'));
	}
  


}
