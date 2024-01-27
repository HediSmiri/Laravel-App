<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
        'name' => 'yassine Rjab',
        'email' => 'yassine@gmail.com',
        'password' => Hash::make('password')
       ]);

       User::create([
        'name' => 'hedi smiri',
        'email' => 'smirihedi4@gmail.com',
        'password' => Hash::make('password1234')
       ]);
       
    }
}
