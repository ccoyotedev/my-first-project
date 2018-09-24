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

        $Venue1 = Venue::create([
        	'name' => 'Gwdihw Cafe bar',
        	'city' => 'Cardiff',
        	'street_address' => '6 Guildford Cres',
        	'post_code' => 'CF10 2HJ',
        	'longitude' => -3.170749,
        	'latitude' => 51.480032,
        ]);

        $Venue2 = Venue::create([
        	'name' => 'Tramshed',
        	'city' => 'Cardiff',
        	'street_address' => 'Clare Road',
        	'post_code' => 'CF11 6QP',
        	'longitude' => -3.186506,
        	'latitude' => 51.475301,
        ]);

        $Venue3 = Venue::create([
        	'name' => 'Clwb lfor Bach',
        	'city' => 'Cardiff',
        	'street_address' => '11 Womanby Street',
        	'post_code' => 'CF10 1BR',
        	'longitude' => -3.181422,
        	'latitude' => 51.480547,
        ]);

        $Venue4 = Venue::create([
        	'name' => 'The Globe',
        	'city' => 'Cardiff',
        	'street_address' => '125 Albany Road',
        	'post_code' => 'CF24 3NS',
        	'longitude' => -3.165217,
        	'latitude' => 51.494295,
        ]);

        $Venue5 = Venue::create([
        	'name' => 'Motorpoint Arena',
        	'city' => 'Cardiff',
        	'street_address' => 'Mary Ann Street',
        	'post_code' => 'CF10 2EQ',
        	'longitude' => -3.171721,
        	'latitude' => 51.478944,
        ]);

        $Venue6 = Venue::create([
        	'name' => 'The Moon',
        	'city' => 'Cardiff',
        	'street_address' => '3 Womanby Street',
        	'post_code' => 'CF10 1BR',
        	'longitude' => -3.181597,
        	'latitude' => 51.480351,
        ]);

        $Venue7 = Venue::create([
        	'name' => 'Brewhouse',
        	'city' => 'Cardiff',
        	'street_address' => '49 St Mary Street',
        	'post_code' => 'CF10 1AD',
        	'longitude' => -3.177321,
        	'latitude' => 51.477766,
        ]);

        $Venue8 = Venue::create([
        	'name' => 'Cafe Jazz',
        	'city' => 'Cardiff',
        	'street_address' => '21 St Mary Street',
        	'post_code' => 'CF10 1PL',
        	'longitude' => -3.178385,
        	'latitude' => 51.479127,
        ]);
    }
}
