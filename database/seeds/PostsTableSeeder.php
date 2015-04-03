<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

// use DB;

class PostsTableSeeder extends Seeder {

    public function run()
    {
    	DB::table('posts')->delete();
        
        TestDummy::times(20)->create('App\Post');
    }

}