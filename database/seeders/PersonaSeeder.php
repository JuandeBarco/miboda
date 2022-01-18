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
        $persona->nombre = 'Juan de Dios';
        $persona->primer_apellido = 'Barajas';
        $persona->segundo_apellido = 'Corona';
        $persona->celular = '3121113174';
        $persona->email = 'lextadz@gmail.com';
        $persona->sexo_id = 1;
        $persona->categoria_id = 1;
        $persona->evento_id = 1;
        $persona->save();
    }
}
