<?php

namespace Database\Seeders;

use App\Models\EstadoPersona;
use Illuminate\Database\Seeder;

class EstadoPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $estado_persona = new EstadoPersona();
        $estado_persona->nombre = 'Pendiente de confirmación';
        $estado_persona->save();

        $estado_persona = new EstadoPersona();
        $estado_persona->nombre = 'Confirmado';
        $estado_persona->save();
        
        $estado_persona = new EstadoPersona();
        $estado_persona->nombre = 'Asistencia';
        $estado_persona->save();
        
        $estado_persona = new EstadoPersona();
        $estado_persona->nombre = 'Inasistencia';
        $estado_persona->save();

        $estado_persona = new EstadoPersona();
        $estado_persona->nombre = 'Cancelado';
        $estado_persona->save();
    }
}
