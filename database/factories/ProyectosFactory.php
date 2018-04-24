<?php

use Faker\Generator as Faker;

$factory->define(App\Proyectos::class, function(Faker $faker){
  return [
    'title' => $faker->word,
    'date_init' => $faker->date,
    'client_id' => rand(1, 4),
    'created_user_id' => 1,
    'description' => $faker->paragraph,
    'finalized' => false
  ];
});
