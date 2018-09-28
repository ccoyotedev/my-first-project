<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Favourite;
use App\Venue;
use App\User;

class FavouriteController extends Controller
{
    public static function register(Venue $venue) {
        $user_id = Auth::user()->id;
        $venue_id = $venue->id;

        $favourites = Favourite::where('user_id', $user_id)->where('venue_id', $venue_id)->get();

        if ($favourites->count() > 0) {
            Favourite::where('user_id', $user_id)->where('venue_id', $venue_id)->delete();

        } else {

            Favourite::create([
            	'user_id' => $user_id,
                'venue_id' => $venue_id
            ]);
        }
    }

    public static function viewFavourites() {

        $venues = Auth::user()->venues;
        return view('favourites', compact('venues'));

    }

}
