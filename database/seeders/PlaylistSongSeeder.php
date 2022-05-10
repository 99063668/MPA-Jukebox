<?php

namespace Database\Seeders;

use App\Models\PlaylistSong;
use Illuminate\Database\Seeder;

use App\Models\Song;
use App\Models\Playlist;

class PlaylistSongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data = [
        //     [
        //         'song_id' => 2,
        //         'playlist_id' => 1,
        //     ],
        //     [
        //         'song_id' => 3,
        //         'playlist_id' => 1,
        //     ]
        // ];
       
        // foreach ($data as $key => $value) {
        //     PlaylistSong::create($value);
        // }


        songs(Song::class, 20)->create();

        songs(Playlist::class, 50)->create();

        $roles = PlaylistSong::all();

    
        PlaylistSong::all()->each(function ($user) use ($roles) { 
            $user->roles()->attach(
                $roles->random(rand(1, 3))->pluck('id')->toArray()
            ); 
        });
    }
}
