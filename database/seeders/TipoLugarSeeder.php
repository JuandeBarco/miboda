<?php

namespace Database\Seeders;

use App\Models\TipoLugar;
use Illuminate\Database\Seeder;

class TipoLugarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipo_lugar = new TipoLugar();
        $tipo_lugar->nombre = 'Recinto';
        $tipo_lugar->save();

        $tipo_lugar = new TipoLugar();
        $tipo_lugar->nombre = 'Recepción';
        $tipo_lugar->save();
    }
}
