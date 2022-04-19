<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'dewi',
                'email' => 'dewi@hotmail.com',
                'password' => 'dewi123',	
            ]
        ];
       
        foreach ($data as $key => $value) {
            User::create($value);
        }
    }
}
