<?php

use App\Admin;

use Illuminate\Database\Seeder;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('admins')->truncate();

		$admin1 = Admin::create([
            'user_id' => 1,
        ]);

        $admin2 = Admin::create([
            'user_id' => 2,
        ]);
		
    }
}
