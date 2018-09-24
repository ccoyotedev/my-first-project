<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function venue() {
    	return $this->belongsTo('App\Venue');
    }

    public function admin() {
    	return $this->belongsTo('App\Admin');
    }
}
