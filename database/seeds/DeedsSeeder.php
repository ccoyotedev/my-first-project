<?php

use App\Deed;
use App\Venue;
use App\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeedsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('deeds')->truncate();

        $firstAdmin = Admin::first();
    	foreach(Venue::all() as $venue) {
            $firstAdmin->venues()->attach($venue->id);
		}
    
    }
}
