<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $fillable = [
    	'user_id',
    ];

    public function venue() {
    	return $this->belongsToMany('App\Venue', 'AdminVenue', 'admin_id', 'venue_id');
	}

	public function event() {
		return $this->hasMany('App\Event');
	}

	public function user() {
		return $this->hasOne('App\User');
	}
}