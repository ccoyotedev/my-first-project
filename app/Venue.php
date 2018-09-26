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

    public function admins() {
    	return $this->belongsToMany('App\Admin','deeds');

	}

	public function events() {
		return $this->hasMany('App\Event');
	}

}
