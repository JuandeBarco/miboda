<?php

namespace Database\Seeders;

use App\Models\CategoriaPersona;
use Illuminate\Database\Seeder;

class CategoriaPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categoria = new CategoriaPersona();
        $categoria->nombre = 'Anfitrión/Anfitriona';
        $categoria->save();

        $categoria = new CategoriaPersona();
        $categoria->nombre = 'Invitado/Invitada';
        $categoria->save();
    }
}
