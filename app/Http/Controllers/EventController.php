<?php


namespace App\Http\Controllers;
use App\Venue;
use App\Event;
use App\Admin;
use App\Interest;
use App\User;
use Auth;

use Illuminate\Http\Request;

class EventController extends Controller
{
    protected function store(Venue $venue) {
        $admin = Auth::user()->admin;

        $venue->events()->create([
            'title' => request('title'),
            'date' => request('date'),
            'start_time' => request('start-time'),
            'end_time' => request('end-time'),
            'age_restriction' => request('age-restriction'),
            'genre' => request('genre'),
            'description' => request('description'),
            'ticket_price' => request('ticket-price'),
            'ticket_link' => request('ticket-link'),
            'created_by' => $admin->id,
        ]);

        $venues = $admin->venues;
  
        return view('admin_venues', compact('venues'));
    }


    public static function view() {

        $cities = Venue::select('city')->groupBy('city')->get();

        $venues = Venue::where('city', 'Cardiff')->get();

        foreach ($venues as $venue) {
            $cityName = $venue->city;
        }

        return $cityName;


        $today = date('Y-m-d');
        $events = Event::where('date', '>=', $today)->orderBy('date')->paginate(5);

        return view('events', compact('events','cities'));
    }



    public static function venueView(Venue $venue) {

        $today = date('Y-m-d');
        
        $events = Event::where('venue_id', $venue->id )->where('date', '>=' , $today)->orderBy('date')->get();
        return view('venue_events', compact('venue', 'events'));        
    }

    public static function viewInterested() {

        $events = Auth::user()->events;
      
        return view('interests', compact('events'));
    }

    public static function registerInterest(Venue $venue, Event $event) {
        $user_id = Auth::user()->id;
        $event_id = $event->id;

        $interested = Interest::where('user_id', $user_id)->where('event_id', $event_id)->get();

        if ($interested->count() > 0) {
            Interest::where('user_id', $user_id)->where('event_id', $event_id)->delete();

        } else {

            Interest::create([
                'event_id' => $event_id,
                'user_id' => $user_id
            ]);
        }
    }



}
