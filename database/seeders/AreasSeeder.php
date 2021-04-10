<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area1 = new Area();
        $area1->name = 'Ventas';
        $area1->save();

        $area2 = new Area();
        $area2->name = 'Calidad';
        $area2->save();

        $area3 = new Area();
        $area3->name = 'Produccion';
        $area3->save();
    }
}
