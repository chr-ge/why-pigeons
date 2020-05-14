<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Review::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 30),
        'restaurant_id' => $faker->numberBetween($min = 1, $max = 40),
        'rating' => $faker->numberBetween($min = 3, $max = 5),
        'comment' => $faker->sentence($nbWords = 6, $variableNbWords = true)
    ];
});
