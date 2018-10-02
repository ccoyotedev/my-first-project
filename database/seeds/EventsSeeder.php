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
            'venue_id' => 3,
            'title' => 'Cleopatrick',
            'date' => Carbon::parse('2018-10-2'),
            'start_time' => '19:00:00',
            'end_time' => '23:00:00',
            'age_restriction' => '16+',
            'genre' => 'Rock',
            'description' => 'This rock duo is formed of best mates, and they\'ve been making noise for as long as they can remember – from the age of four to be exact. Their sounds leans undeniably on rock, though the pair aren\'t happy with that. Never ones for complacency, the young innovators see their cuts as more than a genre. Unbound and visionary, you don\'t wanna miss their experimental live show.',
            'ticket_price' => 6,
            'image' => '/css/img/cleopatrick.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 3,
            'title' => 'YUM!',
            'date' => Carbon::parse('2018-10-5'),
            'start_time' => '23:00:00',
            'end_time' => '03:00:00',
            'age_restriction' => '18+',
            'genre' => 'Party Anthems',
            'description' => 'Where else could you possibly need to be on a Friday night…. There’s simply no where else that will tantalise the musical pallet like YUM!

                Party Anthems // Cult Classics // Dance floor Bangers',
            'ticket_price' => 3,
            'image' => '/css/img/yum.jpg',
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
