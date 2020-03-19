<?php

use Illuminate\Database\Seeder;
use App\Post; 
class CreateDummyPost extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = ['codechief.org', 'wordpress.org', 'laramust.com'];

        foreach ($posts as $key => $value) {
        	Post::create(['title'=>$value]);
        }
    }
}