<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();
        
        #Crear usuario administrador
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@test.com';
        $user->password = '1234';
        $user->role = 'admin';
        
        $user->save();

        $user = new User;
        $user->name = 'Admin1';
        $user->email = 'admin1@test.com';
        $user->password = '1234';
        $user->role = 'admin';
        
        $user->save();

    }

}
