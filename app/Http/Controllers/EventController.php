<?php


namespace App\Http\Controllers;
use App\Venue;
use App\Event;
use App\Admin;
use App\Interest;
use App\User;
use Image;
use Auth;

use Illuminate\Http\Request;

class EventController extends Controller
{
    protected function store(Venue $venue, Request $request) {

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
    

    public function view($city) {

        if ( empty($city) ) $city = 'Cardiff';

        $cities = Venue::select('city')->groupBy('city')->get();

        $today = date('Y-m-d');

        $events = Event::join('venues', 'venues.id', '=', 'events.venue_id')
            ->select('events.*')
            ->orderBy('events.date', 'asc') // 'desc'
            ->where('venues.city', $city)
            ->where('events.date', '>=', $today)
            ->paginate(4);

        return view('events', compact('events','cities', 'city'));
    }

    public function singleEventView($event) {
        // $event_id = $event;
        $events = Event::where('id', $event)->get();

        foreach ($events as $event) {
            $venue = $event->venue;
        }

        return view('venue_events', compact('venue', 'events'));

    }



    public function venueView(Venue $venue) {

        $today = date('Y-m-d');
        
        $events = Event::where('venue_id', $venue->id )->where('date', '>=' , $today)->orderBy('date')->get();
        return view('venue_events', compact('venue', 'events'));        
    }

    public static function viewInterested() {

        $today = date('Y-m-d');

        $events = Event::join('interests', 'interests.event_id', '=', 'events.id')
            ->select('events.*')
            ->orderBy('events.date', 'asc')
            ->where('interests.user_id', '=', Auth::id())
            ->where('events.date', '>=', $today)
            ->paginate(5);

      
        return view('interests', compact('events'));
    }

    public static function registerInterest(Event $event) {
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
