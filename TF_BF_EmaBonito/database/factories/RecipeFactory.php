<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Recipe;
use Faker\Generator as Faker;

$factory->define(Recipe::class, function (Faker $faker) {
    return [
        'title'       => $faker->name,
        'description' => $faker->text($maxNbChars = 60),
        'user_id'     => $faker->numberBetween($min = 1, $max = 5)
    ];
});
