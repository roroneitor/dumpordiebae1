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

      $role_user = Role::where('name', 'user')->first();
      $role_admin = Role::where('name', 'admin')->first();

      $user = new User();
      $user->name = 'User';
      $user->email = 'user@example.com';
      $user->password = bcrypt('secret');
      $user->phone = '04148221650';
      $user->country_id = 237;
      $user->state_id = 4036;
      $user->save();
      $user->roles()->attach($role_user);
      
      $user = new User();
      $user->name = 'Admin';
      $user->email = 'admin@example.com';
      $user->password = bcrypt('secret');
      $user->phone = '04148221649';
      $user->country_id = 237;
      $user->state_id = 4036;
      $user->save();
      $user->roles()->attach($role_admin);
    }
}
