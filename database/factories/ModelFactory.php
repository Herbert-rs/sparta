<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

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

$factory->define(\App\User::class, function (Faker $faker) {

    return [
        'corporate' => $faker->boolean,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('password'),
        'token' => Str::random(10),
        'active' => $faker->boolean
    ];

});

$factory->define(\Model\Building\Building::class, function (Faker $faker) {
    
    $types = array('Av', 'Rua', 'Rodovia');

    $mail_code    = $faker->postcode;
    $type         = $types[array_rand($types)];
    $name         = $faker->streetName;
    $number       = $faker->buildingNumber;
    $state        = $faker->state;
    $city         = $faker->city;
    $full_address = $type.' '.$name.' '.$number.', '.$city.' - '.$state.', '.$mail_code;
    $district     = null;

    return [
        'mail_code' => $mail_code,
        'type' => $type,
        'name' => $name,
        'number' => $number,
        'state' => $state,
        'city' => $city,
        'full_address' => $full_address,
        'district' => $district,
    ];

});
