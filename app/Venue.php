<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public function admin() {
    	return $this->belongsToMany('App\Admin', 'AdminVenue', 'venue_id', 'admin_id');

	}

	public function event() {
		return $this->hasMany('App\Event');
	}

}
