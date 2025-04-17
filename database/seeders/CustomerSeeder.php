<?php

namespace Database\Seeders;

use App\Models\customers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        {
            $users = [
                [
                    'name' => 'frieska aulia',
                    'no_hp' => '081514484772',
                    'point' => '100'
                ],
                [
                    'name' => 'dhea nickyta',
                    'no_hp' => '08123456789',
                    'point' => '100',
                ],
            ];
    
            foreach ($users as $user) {
                customers::create($user);
            }
        }
    }
}
