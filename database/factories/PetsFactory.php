<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pets;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Pets::class, function (Faker $faker) {
    return [
        'nome' => $faker->shuffleString($string = 'Luke', $encoding = 'UTF-8'),
        'especie' => $faker->shuffleString($string = 'C', $encoding = 'UTF-8'),
    ];
});
