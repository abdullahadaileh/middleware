<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Abdallah',
            'email' => 'abdallah@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), 
            'remember_token' => null,
            'role' => 'admin', 
        ]);


        User::factory()->count(9)->create(); 
    }
}
