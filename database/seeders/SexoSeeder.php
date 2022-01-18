<?php

namespace Database\Seeders;

use App\Models\Sexo;
use Illuminate\Database\Seeder;

class SexoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sexo = new Sexo();
        $sexo->nombre = 'Hombre';
        $sexo->save();

        $sexo = new Sexo();
        $sexo->nombre = 'Mujer';
        $sexo->save();

        $sexo = new Sexo();
        $sexo->nombre = 'Prefiero no decirlo';
        $sexo->save();
    }
}
