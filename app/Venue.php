<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Favourite;

class Venue extends Model
{
    //

    protected $fillable = [
    	'name',
    	'city',
    	'street_address',
    	'post_code',
    	'longitude',
    	'latitude'
    ];

    public function admins() {
    	return $this->belongsToMany('App\Admin','deeds');
	}

    public function users() {
        return $this->belongsToMany('App\User','favourites');
    }

	public function events() {
		return $this->hasMany('App\Event');
	}

    public function getUserFavouritedAttribute() {

        $venue_id = $this->id;
        $user_id = Auth::user()->id;

        $favourites = Favourite::where('user_id', $user_id)->where('venue_id', $venue_id)->get();

        if ($favourites->count() > 0) {
            return true;
        } else {
            return false;
        }

    }
}
