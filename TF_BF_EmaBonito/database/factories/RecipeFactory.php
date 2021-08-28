<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Recipe;
use Faker\Generator as Faker;

$factory->define(Recipe::class, function (Faker $faker) {
    return [
        'title'       => $faker->name,
        'description' => $faker->text($maxNbChars = 10),
        'ingredients' => $faker->text($maxNbChars = 200) 
    ];
});
