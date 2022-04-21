<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    public function run()
    {
        $data = [
          [
            'song' => 'hiphop',
            'album' => 'album',
            'artist' => 'artist',
            'duration' => 1,
            'genreId' => 1
          ],
          [
            'song' => 'rap',
            'album' => 'album',
            'artist' => 'artist',
            'duration' => 1,
            'genreId' => 2
          ],
          [
            'song' => 'edm',
            'album' => 'album',
            'artist' => 'artist',
            'duration' => 1,
            'genreId' => 3
          ],
          [
            'song' => 'dance',
            'album' => 'album',
            'artist' => 'artist',
            'duration' => 1,
            'genreId' => 4
          ],
          [
            'song' => 'rock',
            'album' => 'album',
            'artist' => 'artist',
            'duration' => 1,
            'genreId' => 5
          ]
      ];
    
      foreach ($data as $key => $value) {
        Song::create($value);
      }
    }
}
