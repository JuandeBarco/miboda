<?php

namespace Database\Seeders;

use App\Models\RolPersona;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        $this->call([
            UserSeeder::class,
            TipoLugarSeeder::class,
            CategoriaPersonaSeeder::class,
            RolPersonaSeeder::class,
            SexoSeeder::class,
            EventoSeeder::class,
            PersonaSeeder::class,
        ]);
    }
}
