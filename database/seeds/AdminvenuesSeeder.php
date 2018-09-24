<?php

use App\AdminVenue;
use App\Venue;
use Illuminate\Database\Seeder;

class AdminvenuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('admin_venues')->truncate();

    	foreach(Venue::all() as $venue) {
    		AdminVenue::create([
	    		'admin_id' => 1, 
	    		'venue_id' => $venue->id,		
	    	]);
		}
    
    }
}
