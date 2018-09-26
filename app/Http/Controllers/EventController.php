<?php


namespace App\Http\Controllers;
use App\Venue;
use App\Event;

use Illuminate\Http\Request;

class EventController extends Controller
{
    protected function store()
    {       
        Event::create([
        	'venue_id' => 1,
            'title' => request('title'),
            'date' => request('date'),
            'start_time' => request('start-time'),
            'end_time' => request('end-time'),
            'age_restriction' => '18+', //request('age-restriction'),
            'genre' => request('genre'),
            'description' => request('description'),
            'ticket_price' => request('ticket-price'),
            'ticket_link' => request('ticket-link'),
            'created_by' => 1,

        ]);

        return view('index');
    }

    public static function view(Venue $venue) {
        
        $events = $venue->events;
        return view('venue_events', compact('venue', 'events'));        
    }

}
