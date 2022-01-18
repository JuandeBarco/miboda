<?php

namespace Database\Seeders;

use App\Models\RolPersona;
use Illuminate\Database\Seeder;

class RolPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rol = new RolPersona();
        $rol->nombre = 'Padrino/Madrina';
        $rol->save();
    }
}
