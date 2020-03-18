<?php
use Illuminate\Database\Seeder;
use App\Blogs;

class CreateDummyPost extends Seeder
{
  
    public function run()
    {
        $posts = ['codechief.org', 'wordpress.org', 'laramust.com'];

        foreach ($posts as $key => $value) {
        	Blogs::create(['title'=>$value]);
        }
    }

} 
