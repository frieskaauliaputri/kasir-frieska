<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $users = [
                [
                    'name' => 'admin',
                    'email' => 'administrator@gmail.com',
                    'password' => Hash::make('administrasi'),
                    'role' => 'admin'
                ],
                [
                    'name' => 'user',
                    'email' => 'useremp@gmail.com',
                    'password' => Hash::make('useremp'),
                    'role' => 'employee'
                ],
            ];
    
            foreach ($users as $user) {
                User::create($user);
            }
        }
    }
}
