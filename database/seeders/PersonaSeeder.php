<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $persona = new Persona();
        $persona->nombre = 'Francisco Nicolas';
        $persona->primer_apellido = 'Barajas';
        $persona->segundo_apellido = 'Corona';
        $persona->sexo_id = 1;
        $persona->evento_id = 1;
        $persona->grupo_id = 1;
        $persona->estado_id = 1;
        $persona->boleto_id = 1;
        $persona->save();
    }
}
