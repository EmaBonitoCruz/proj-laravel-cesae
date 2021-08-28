<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Instruction;
use Faker\Generator as Faker;

$factory->define(Instruction::class, function (Faker $faker) {
    return [
        'instruction' => $faker->sentence($nbWords = 20, $variableNbWords = true),
        'recipe_id'  => $faker->numberBetween($min = 1, $max = 20)
    ];
});
