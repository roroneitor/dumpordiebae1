<?php

use Faker\Generator as Faker;

$factory->define(App\Clientes::class, function (Faker $faker) {
    return [
        'id_number' => str_random(10),
        'email' => $faker->unique()->safeEmail,
        'business_name' => $faker->company,
        'country_id' => 237,
        'state_id' => 4036,
        'created_user_id' => 1,
        'phone' => $faker->phoneNumber,
        'description' =>$faker->paragraph
    ];
});
