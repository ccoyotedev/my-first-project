<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $fillable = [
    	'user_id',
    ];

    public function venues() {
    	return $this->belongsToMany('App\Venue', 'deeds');
	}

	public function events() {
		return $this->hasMany('App\Event');
	}

	public function user() {
		return $this->hasOne('App\User');
	}
}