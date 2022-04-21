<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'dewi',
                'email' => 'dewi@hotmail.com',
                'password' => Hash::make('dewi123')	
            ]
        ];
       
        foreach ($data as $key => $value) {
            User::create($value);
        }
    }
}
