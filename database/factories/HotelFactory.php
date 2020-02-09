<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hotel;
use Faker\Generator as Faker;

$factory->define(Hotel::class, function (Faker $faker) {
    return [
        'hotel_name'=>$faker->company ."  Hotel",
        'user_id'=>1,
        'location'=>'Nairobi'
    ];
});
