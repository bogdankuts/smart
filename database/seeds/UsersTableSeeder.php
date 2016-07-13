<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    //factory(App\User::class, 3)->create();
	    DB::table('users')->insert([
		    'name' => 'Unknown',
		    'email' => 'default@default.com',
		    'password' => bcrypt('default_admin_SMART'),
		    'remember_token' => str_random(10),
		    'master' => 1
	    ]);
	    DB::table('users')->insert([
		    'name' => 'BogdanKuts',
	        'email' => 'bodyakootz@gmail.com',
	        'password' => bcrypt('password'),
		    'remember_token' => str_random(10),
	        'master' => 1
	    ]);
    }
}
