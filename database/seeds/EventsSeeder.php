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
            'venue_id' => 5,
            'title' => 'STEPBACK! 90S CONCERT',
            'date' => Carbon::parse('2018-10-14'),
            'start_time' => '19:00:00',
            'end_time' => '23:00:00',
            'age_restriction' => 'None',
            'genre' => 'Pop',
            'description' => 'Featuring performances from Peter Andre, B*Witched, Blazin’ Squad, Booty Luv, Big Brovaz, East 17., Boyzlife, 5IVE and SCLUB',
            'ticket_price' => 50,
            'image' => '/css/img/stepback.pnp',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 5,
            'title' => 'David Byrne',
            'date' => Carbon::parse('2018-10-27'),
            'start_time' => '18:30:00',
            'end_time' => '23:00:00',
            'age_restriction' => 'None',
            'genre' => 'Rock',
            'description' => 'Byrne will be performing songs from his critically acclaimed album American Utopia, as well as classics from his solo career and his days with Talking Heads.  A twelve-piece band will also join Byrne on stage for an Annie-B Parson choreographed concert that he has called  “The most ambitious show I’ve done since the shows that were filmed for Stop Making Sense.”  Annie-B Parson also choreographed the St. Vincent and David Byrne collaboration tour around Love This Giant.',
            'ticket_price' => 50,
            'image' => '/css/img/david.jpg',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);

        Event::create([
            'venue_id' => 5,
            'title' => 'STEPBACK! 90S CONCERT',
            'date' => Carbon::parse('2018-10-14'),
            'start_time' => '19:00:00',
            'end_time' => '23:00:00',
            'age_restriction' => 'None',
            'genre' => 'Pop',
            'description' => 'Featuring performances from Peter Andre, B*Witched, Blazin’ Squad, Booty Luv, Big Brovaz, East 17., Boyzlife, 5IVE and SCLUB',
            'ticket_price' => 50,
            'image' => '/css/img/stepback.pnp',
            'ticket_link' => 'https://www.google.com',
            'created_by' => 1,
        ]);
    }
}
