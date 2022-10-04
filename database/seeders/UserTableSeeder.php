<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    public function run(){
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
         User::factory()->create([
            'name' => 'Largui',
            'firstName' => 'Daniel',
            'lastName' => 'Martinez Coll',
            'email' => 'daniel.martinez.coll@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'dni' => '32659865',
            'address' => 'ampere 425',
            'phone' => '2613848497', 
            'city' => 'Mendoza',
            'country' => 'Argentina',
            'postalCode' => '5501',
            'role' => '1'
        ]);

        $user = User::factory(50)->create();
    }
}
