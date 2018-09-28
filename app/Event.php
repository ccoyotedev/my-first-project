<?php

namespace App;
use Auth;
use App\Interest;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

	protected $fillable = [
        'venue_id',
    	'title',
    	'date',
    	'start_time',
    	'end_time',
    	'age_restriction',
    	'genre',
    	'description',
    	'ticket_price',
    	'ticket_link',
        'created_by',
    ];

    public function venue() {
    	return $this->belongsTo('App\Venue');
    }

    public function admin() {
    	return $this->belongsTo('App\Admin');
    }

    public function users() {
        return $this->belongsToMany('App\User', 'interests');
    }

    public function getUserInterestedAttribute() {

        $event_id = $this->id;
        $user_id = Auth::user()->id;

        $interested = Interest::where('user_id', $user_id)->where('event_id', $event_id)->get();

        if ($interested->count() > 0) {
            return true;
        } else {
            return false;
        }

    }
}
