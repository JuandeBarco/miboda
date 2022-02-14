<?php

namespace Database\Seeders;

use App\Models\Boleto;
use Illuminate\Database\Seeder;

class BoletosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Boleto::factory(120)->create();
    }
}
