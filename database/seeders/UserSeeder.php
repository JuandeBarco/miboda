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
        $user->email ='lextadz@gmail.com';
        $user->password = Hash::make('qwerty123');
        $user->save();
        
        $user = new User();
        $user->name = 'Isis Ge';
        $user->email ='isisg2809@gmail.com';
        $user->password = Hash::make('qwerty123');
        $user->save();
    }
}
