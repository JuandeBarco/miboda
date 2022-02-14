<?php

namespace Database\Seeders;

use App\Models\EstadoBoleto;
use Illuminate\Database\Seeder;

class EstadoBoletoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $estado_boleto = new EstadoBoleto();
        $estado_boleto->nombre = 'Vigente';
        $estado_boleto->save();

        $estado_boleto = new EstadoBoleto();
        $estado_boleto->nombre = 'Usado';
        $estado_boleto->save();

        $estado_boleto = new EstadoBoleto();
        $estado_boleto->nombre = 'Cancelado';
        $estado_boleto->save();
    }
}
