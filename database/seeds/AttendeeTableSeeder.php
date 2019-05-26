<?php

use Illuminate\Database\Seeder;

class AttendeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list[ 1 ] = [1, 2];
        $list[ 2 ] = [3, 4, 5];
        $list[ 3 ] = [6, 7, 9];
        $list[ 4 ] = [1, 4, 8, 10];
        $list[ 5 ] = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $list[ 6 ] = [9, 4, 6, 2, 3];
        $list[ 7 ] = [2, 4, 6, 8];
        $list[ 8 ] = [1, 3, 5, 7, 9];
        $list[ 9 ] = [2];
        $list[ 10 ] = [1, 2, 6, 7];
        
        foreach ( $list as $key => $ids ) {
            foreach ( $ids as $user ) {
                DB::table('attendees')->insert([
                        'meeting_id' => $key,
                        'user_id' => $user,
                        'attending' => rand(0,1),
                ]);
            }
        }
    }
}
