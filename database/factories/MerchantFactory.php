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

$factory->define(App\Merchant::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => 9999999999,
        'address' => $faker->address,
        'company_name' => $faker->company,
        'company_address' => $faker->sentence,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
