<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
$role = new Role();
$role->name = 'Administrador';
$role->description = 'Accesso a todas las caracteristicas';
$role->save();
$role = new Role();
$role->name = 'Lider de Proyecto';
$role->description = 'Accesso a casi todas las caracteristicas';
$role->save();
$role = new Role();
$role->name = 'Usuario';
$role->description = 'Acceso limitado';
$role->save();
    }
}
