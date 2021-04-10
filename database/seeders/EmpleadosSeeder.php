<?php

namespace Database\Seeders;

use App\Models\Empleados;
use Illuminate\Database\Seeder;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empleado1 = new Empleados();
        $empleado1->nombre = 'Gladis Fernandez';
        $empleado1->email = 'gladis@nexura.com';
        $empleado1->sexo = 1;
        $empleado1->area_id = 2;
        $empleado1->boletin = 0;
        $empleado1->descripcion = 'Esta es la descripción de un empleado';
        $empleado1->save();

    }
}
