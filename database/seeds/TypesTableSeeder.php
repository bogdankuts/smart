<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('types')->insert([
		    'type' => 'article',
	    ]);
	    DB::table('types')->insert([
		    'type' => 'event',
	    ]);
	    DB::table('types')->insert([
		    'type' => 'challenge',
	    ]);
	    DB::table('types')->insert([
		    'type' => 'grant',
	    ]);
	    DB::table('types')->insert([
		    'type' => 'project',
	    ]);
	    DB::table('types')->insert([
		    'type' => 'story',
	    ]);

    }
}
