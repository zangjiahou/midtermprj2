<?php

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

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement(['toyota', 'honda', 'ford']),
        'model' => $faker->randomElement(['car1' , 'car2' , 'car3']),
        'year' => $faker->year,

    ];
});
