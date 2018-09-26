<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

	protected $fillable = [
    	'title',
    	'date',
    	'start_time',
    	'end_time',
    	'age_restriction',
    	'genre',
    	'description',
    	'ticket_price',
    	'ticket_link',
    ];

    public function venue() {
    	return $this->belongsTo('App\Venue');
    }

    public function admin() {
    	return $this->belongsTo('App\Admin');
    }
}
