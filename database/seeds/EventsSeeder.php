<?php

use App\Event;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->truncate();

        Event::create([
            'venue_id' => 1,
            'title' => 'The MixTape Freshers Party',
            'date' => Carbon::parse('2018-10-06'),
            'start_time' => '21:00:00',
            'end_time' => '02:00:00',
            'age_restriction' => '18+',
            'genre' => 'Dance',
            'description' => 'We are back!
                 After a lovely long summer with brief stopovers at Gottwood, Kala and Westival, the mixtape is back with more bangers, clangers and slammers to get your taps aff and boogie to.
                Get cosy and crack open a cold tin of dark fruit (other fruit-flavoured alcoholic beverages are available) as our residents guide you through a night of dancefloor joy.
                maximum fun maximum love maximum good times
                join us for a dance x',
            'ticket_price' => 3,
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 1,
            'title' => 'Juxtaposed PRESENTS Surreal Kinnock',
            'date' => Carbon::parse('2018-10-09'),
            'start_time' => '19:30:00',
            'end_time' => '23:00:00',
            'age_restriction' => '18+',
            'genre' => 'Disco',
            'description' => 'Romping political grit-pop with colourful realms & biting lyrics, the amazing Surreal Kinnock headline Gwdihw in October!
                support comes from Scott Lavene, shop girls & more tbc
                presented in conjunction with funnel music & crosstown concerts
                “Gruffydd John and Meredydd Russell-Jones are brothers both musically and biologically, and together they’ve crafted their own world.',
            'ticket_price' => 4,
            'image' => '/css/img/surreal.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 1,
            'title' => 'The Flim Flam',
            'date' => Carbon::parse('2018-10-25'),
            'start_time' => '20:00:00',
            'end_time' => '23:00:00',
            'age_restriction' => '18+',
            'genre' => 'Disco',
            'description' => 'Lets get down to it. Disco beats are back and back with a vengence. Flim Flam present to you a world of sounds.',
            'ticket_price' => 10,
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 1,
            'title' => 'The Flim Flam',
            'date' => Carbon::parse('2018-10-25'),
            'start_time' => '20:00:00',
            'end_time' => '23:00:00',
            'age_restriction' => '18+',
            'genre' => 'Disco',
            'description' => 'Lets get down to it. Disco beats are back and back with a vengence. Flim Flam present to you a world of sounds.',
            'ticket_price' => 10,
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);
    }
}
