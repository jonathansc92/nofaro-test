<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Atendimentos;
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

$factory->define(Atendimentos::class, function (Faker $faker) {
    return [
        'pets_id' => $faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt'),
        'data_atendimento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'descricao' => $faker->toLower($string = 'Em 03/01/2012, o pet Bolinha, tomou a primeira dose da vacina da gripe.'),
    ];
});
