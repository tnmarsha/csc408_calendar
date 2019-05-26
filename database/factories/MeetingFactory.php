<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Meeting;
use Faker\Generator as Faker;

$factory->define(Meeting::class, function (Faker $faker) {
    
    $start = $faker->dateTimeBetween('now', '2 years');
    $end = $faker->dateTimeBetween($start->format('Y-m-d H:i:s'), $start->format('Y-m-d H:i:s').' +8 hours');
    
    return [
            'title' => $faker->words(3, true),
            'details' => $faker->sentence,
            'location' => $faker->streetAddress,
            'start_date' => $start,
            'end_date' => $end,
    ];
});
