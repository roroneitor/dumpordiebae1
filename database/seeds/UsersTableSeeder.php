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
      $user->name = 'Wilmer Zambrano';
      $user->email = 'usuario1@ejemplo.com';
      $user->password = bcrypt('secret');
      $user->phone = '04161234567';
      $user->save();
      $user->roles()->attach($role_user);

      $user = new User();
      $user->name = 'Tulio Mulford';
      $user->email = 'usuario2@ejemplo.com';
      $user->password = bcrypt('secret');
      $user->phone = '04148221650';
      $user->save();
      $user->roles()->attach($role_user);

      $user = new User();
      $user->name = 'Edgard Garcia';
      $user->email = 'usuario3@ejemplo.com';
      $user->password = bcrypt('secret');
      $user->phone = '04148221639';
      $user->save();
      $user->roles()->attach($role_user);

      $user = new User();
      $user->name = 'Rodrigo Navarrete';
      $user->email = 'admin@ejemplo.com';
      $user->password = bcrypt('secret');
      $user->phone = '04148221649';
      $user->save();
      $user->roles()->attach($role_admin);

      $user = new User();
      $user->name = 'Pedro Perez';
      $user->email = 'liderP@ejemplo.com';
      $user->password = bcrypt('secret');
      $user->phone = '04148221655';
      $user->save();
      $user->roles()->attach($role_pleader);

      $user = new User();
      $user->name = 'Juan Hernandez';
      $user->email = 'lider2P@ejemplo.com';
      $user->password = bcrypt('secret');
      $user->phone = '04141234567';
      $user->save();
      $user->roles()->attach($role_pleader);
    }
}
