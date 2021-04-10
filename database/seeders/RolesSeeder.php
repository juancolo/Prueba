<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol1 = new Roles();
        $rol1->name = 'Profesional de proyectos - Desarrollador';
        $rol1->save();

        $rol2 = new Roles();
        $rol2->name = 'Gerente estartégico';
        $rol2->save();

        $rol3 = new Roles();
        $rol3->name = 'Auxiliar Administrativo';
        $rol3->save();
    }
}
