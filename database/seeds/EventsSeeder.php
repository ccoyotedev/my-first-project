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

        for ($i=0; $i<50; $i++) {
            Event::create([
            	'venue_id' => rand(1, 8),
                'title' => 'The Wham Jam',
                'date' => Carbon::parse('2018-10-21'),
                'start_time' => '20:00:00',
                'end_time' => '23:00:00',
                'age_restriction' => '18+',
                'genre' => 'Funk',
                'description' => 'Lets have a funky get down!',
                'ticket_price' => 10,
                'ticket_link' => 'https://www.google.com',
                'created_by' => 1,
            ]);
        }

        $Venue2 = Event::create([
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
