<?php

namespace Database\Seeders;

use App\Models\Evento;
use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $evento = new Evento();
        $evento->nombre = 'Boda de Isis y Juande';
        $evento->fecha = '2022-10-22';
        $evento->hora_inicial = '21:00:00';
        $evento->hora_final = '02:00:00';
        $evento->estado = 'Colima';
        $evento->ciudad = 'Colima';
        $evento->user_id = 1;
        $evento->save();
    }
}
