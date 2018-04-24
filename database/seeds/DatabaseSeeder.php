<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(UsersTableSeeder::class);
      // Model::unguard();
      factory('App\Clientes', 4)->create();
      factory('App\Proyectos', 15)->create();
      // Model::reguard();
    }
}
