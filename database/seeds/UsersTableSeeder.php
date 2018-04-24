<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Agustin Marcano',
          'email' => 'amarcano@gmail.com',
          'phone' => '04121234567',
          'country_id' => 237,
          'state_id' => 4036,
          'password' => bcrypt('123456'), // secret
          'remember_token' => str_random(10),
          'created_at' => Carbon::now()
      ]);
    }
}
