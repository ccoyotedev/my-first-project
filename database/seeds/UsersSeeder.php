<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
	

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//clears table
		DB::table('users')->truncate();

		for($i=0; $i<10; $i++) {
			User::create([
				'email' => "users$i@hotmail.com",
				'name' => "User $i",
				'password' => Hash::make('password'),
			]);
		}

        //Fill the databse with users!
 
        //write the fields to the DB


        $user2 = User::create([
        	'email' => 'dave@dave.com',
        	'name' => 'Dave',
        	'password' => Hash::make('password')
        ]);

    }
}
