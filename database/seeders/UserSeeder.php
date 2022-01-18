<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->name = 'Juan de Dios';
        $user->email ='developer@siserin.com.mx';
        $user->password = Hash::make('qwerty123');
        $user->save();
        // $user->assignRole('developer');
    }
}
