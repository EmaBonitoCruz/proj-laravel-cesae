<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ingredient;
use Faker\Generator as Faker;

$factory->define(Ingredient::class, function (Faker $faker) {
    return [
        'ingredient' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'recipe_id'  => $faker->numberBetween($min = 1, $max = 20)
    ];
});
