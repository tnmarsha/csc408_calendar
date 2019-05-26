<?php

use Illuminate\Database\Seeder;

class MeetingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Meeting::class, 10)->create();
        
//                                    ->each(function ($user) {
//            $user->posts()->save(factory(App\Post::class)->make());
//        });
    }
}
