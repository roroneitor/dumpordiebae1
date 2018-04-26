<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $role_user = Role::where('name', 'Usuario')->first();
      $role_admin = Role::where('name', 'Administrador')->first();
      $role_pleader = Role::where('name', 'Lider de Proyecto')->first();

      $user = new User();
      $user->name = 'Usuario';
      $user->email = 'user@example.com';
      $user->password = bcrypt('secret');
      $user->phone = '04148221650';
      $user->save();
      $user->roles()->attach($role_user);

      $user = new User();
      $user->name = 'Administrador';
      $user->email = 'admin@example.com';
      $user->password = bcrypt('secret');
      $user->phone = '04148221649';
      $user->save();
      $user->roles()->attach($role_admin);

      $user = new User();
      $user->name = 'Lider de Proyecto';
      $user->email = 'adminP@example.com';
      $user->password = bcrypt('secret');
      $user->phone = '04148221655';
      $user->save();
      $user->roles()->attach($role_pleader);
    }
}
