<?php

namespace Database\Seeders;

use App\Models\Playlist;
use Illuminate\Database\Seeder;

class PlaylistSeeder extends Seeder
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
                'name' => 'Test playlist',
                'user_id' => 1,
            ]
        ];
       
        foreach ($data as $key => $value) {
            Playlist::create($value);
        }
    }
}
