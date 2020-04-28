<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Driver;
use Faker\Generator as Faker;

$factory->define(Driver::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->freeEmail,
        'phone'=> $faker->unique()->numerify('##########'),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    ];
});
