<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Song;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    public function run()
    {
        $data = [
          [
            'title' => 'song1',
            'album' => 'album',
            'artist' => 'artist',
            'duration' => 1,
            'year' => 2018,
            'genre_id' => Genre::where('name', 'hiphop')->get()->first()->id
          ],
          [
            'title' => 'song2',
            'album' => 'album',
            'artist' => 'artist',
            'duration' => 1,
            'year' => 2018,
            'genre_id' => Genre::where('name', 'rap')->get()->first()->id
          ],
          [
            'title' => 'song3',
            'album' => 'album',
            'artist' => 'artist',
            'duration' => 1,
            'year' => 2018,
            'genre_id' => Genre::where('name', 'edm')->get()->first()->id
          ],
          [
            'title' => 'song4',
            'album' => 'album',
            'artist' => 'artist',
            'duration' => 1,
            'year' => 2018,
            'genre_id' => Genre::where('name', 'hardcore')->get()->first()->id
          ],
          [
            'title' => 'song5',
            'album' => 'album',
            'artist' => 'artist',
            'duration' => 1,
            'year' => 2018,
            'genre_id' => Genre::where('name', 'rock')->get()->first()->id
          ]
      ];
    
      foreach ($data as $key => $value) {
        Song::create($value);
      }
    }
}
