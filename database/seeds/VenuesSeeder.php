<?php

use App\Venue;

use Illuminate\Database\Seeder;

class VenuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('venues')->truncate();

        Venue::create([
        	'name' => 'Gwdihw Cafe bar',
        	'city' => 'Cardiff',
            'venue_type' => 'Live Music Venue',
            'description' => 'Daytime cafe/bar with a beer garden, becomes a live music venue at night, for indie, soul and more.',
        	'street_address' => '6 Guildford Cres',
        	'post_code' => 'CF10 2HJ',
        	'longitude' => -3.170749,
        	'latitude' => 51.480032,
        ]);

        Venue::create([
        	'name' => 'Tramshed',
        	'city' => 'Cardiff',
            'venue_type' => 'Music and Arts Venue',
            'description' => 'Tramshed is a music and arts venue in Cardiff, Wales, located in a Grade II-listed building that was once the old tram depot for west Cardiff.',
        	'street_address' => 'Clare Road',
        	'post_code' => 'CF11 6QP',
        	'longitude' => -3.186506,
        	'latitude' => 51.475301,
        ]);

        Venue::create([
        	'name' => 'Clwb lfor Bach',
        	'city' => 'Cardiff',
            'venue_type' => 'Live Music Venue and Nightclub',
            'description' => 'Rock club focuses on homegrown acts, with low key shows by big names, but also features dance music.',
        	'street_address' => '11 Womanby Street',
        	'post_code' => 'CF10 1BR',
        	'longitude' => -3.181422,
        	'latitude' => 51.480547,
        ]);

        Venue::create([
        	'name' => 'The Globe',
        	'city' => 'Cardiff',
            'venue_type' => 'Live Music Venue',
            'description' => 'Former cinema with a balcony and an auditorium, hosting well-known rock bands, comedians and DJs.',
        	'street_address' => '125 Albany Road',
        	'post_code' => 'CF24 3NS',
        	'longitude' => -3.165217,
        	'latitude' => 51.494295,
        ]);

        Venue::create([
        	'name' => 'Motorpoint Arena',
        	'city' => 'Cardiff',
            'venue_type' => 'Exhibition Centre and Events Arena',
            'description' => 'Motorpoint Arena Cardiff is an indoor exhibition centre and events arena located in Cardiff, the capital of Wales, and was opened on 10 September 1993 by singer Shirley Bassey.',
        	'street_address' => 'Mary Ann Street',
        	'post_code' => 'CF10 2EQ',
        	'longitude' => -3.171721,
        	'latitude' => 51.478944,
        ]);

        Venue::create([
        	'name' => 'The Moon',
        	'city' => 'Cardiff',
            'venue_type' => 'Music Venue, Bar and Club',
            'description' => 'From folk to reggae, hip hop to bebop, this high-energy bar offers live bands and regular guest DJs.',
        	'street_address' => '3 Womanby Street',
        	'post_code' => 'CF10 1BR',
        	'longitude' => -3.181597,
        	'latitude' => 51.480351,
        ]);

        Venue::create([
        	'name' => 'Brewhouse',
        	'city' => 'Cardiff',
            'venue_type' => 'Live Music and Sport Venue',
            'description' => ' ',
        	'street_address' => '49 St Mary Street',
        	'post_code' => 'CF10 1AD',
        	'longitude' => -3.177321,
        	'latitude' => 51.477766,
        ]);

        Venue::create([
        	'name' => 'Cafe Jazz',
        	'city' => 'Cardiff',
            'venue_type' => 'Jazz, Blues and Food Venue',
            'description' => 'Hotel venue with live jazz and blues most nights, bar food and a restaurant with global flavours.',
        	'street_address' => '21 St Mary Street',
        	'post_code' => 'CF10 1PL',
        	'longitude' => -3.178385,
        	'latitude' => 51.479127,
        ]);

        Venue::create([
            'name' => 'Le Public Space',
            'city' => 'Newport',
            'venue_type' => 'Live Music Venue',
            'description' => 'Compact, buzzing bar and music venue hosting gigs by up-and-coming bands and regular comedy nights.',
            'street_address' => '14 High Street',
            'post_code' => 'NP20 1FW',
            'longitude' => -2.996891,
            'latitude' => 51.589526,
        ]);
    }
}
