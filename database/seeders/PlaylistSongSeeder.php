<?php

namespace Database\Seeders;

use App\Models\PlaylistSong;
use Illuminate\Database\Seeder;

class PlaylistSongSeeder extends Seeder
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
                'song_id' => 2,
                'playlist_id' => 1,
            ],
            [
                'song_id' => 3,
                'playlist_id' => 1,
            ]
        ];
       
        foreach ($data as $key => $value) {
            PlaylistSong::create($value);
        }
    }
}
