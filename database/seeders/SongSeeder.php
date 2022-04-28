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
            'title' => 'Homicide',
            'album' => 'Confessions of a Dangerous Mind',
            'artist' => 'Logic ft Eminem',
            'duration' => 405,
            'year' => 2019,
            'audio' => 'Homicide.mp3',
            'genre_id' => Genre::where('name', 'rap')->get()->first()->id
          ],
          [
            'title' => 'Mockingbird',
            'album' => 'Encore',
            'artist' => 'Eminem',
            'duration' => 410,
            'year' => 2004,
            'audio' => 'Mockingbird.mp3',
            'genre_id' => Genre::where('name', 'rap')->get()->first()->id
          ],
          [
            'title' => 'Ocean',
            'album' => 'The Martin Garrix Experience',
            'artist' => 'Martin Garrix ft Khalid',
            'duration' => 336,
            'year' => 2019,
            'audio' => 'Ocean.mp3',
            'genre_id' => Genre::where('name', 'house')->get()->first()->id
          ],
          [
            'title' => 'Bad',
            'album' => 'Forever',
            'artist' => 'Don Diablo',
            'duration' => 249,
            'year' => 2021,
            'audio' => 'Bad.mp3',
            'genre_id' => Genre::where('name', 'house')->get()->first()->id
          ],
          [
            'title' => 'Knock Knock',
            'album' => 'The Deadfaced Dimension',
            'artist' => 'Angerfist',
            'duration' => 402,
            'year' => 2014,
            'audio' => 'Knock_Knock.mp3',
            'genre_id' => Genre::where('name', 'hardcore')->get()->first()->id
          ],
          [
            'title' => 'Trip to Ireland',
            'album' => 'Trip Around The World',
            'artist' => 'Dr. Peacock',
            'duration' => 403,
            'year' => 2016,
            'audio' => 'Trip_To_Ireland.mp3',
            'genre_id' => Genre::where('name', 'hardcore')->get()->first()->id
          ],
          [
            'title' => 'Gods plan',
            'album' => 'Scorpion',
            'artist' => 'Drake',
            'duration' => 318,
            'year' => 2018,
            'audio' => 'Gods_Plan.mp3',
            'genre_id' => Genre::where('name', 'hiphop')->get()->first()->id
          ],
          [
            'title' => 'Still D.R.E',
            'album' => '2001',
            'artist' => 'Dr. Dre ft Snoop Dogg',
            'duration' => 430,
            'year' => 1999,
            'audio' => 'Still_DRE.mp3',
            'genre_id' => Genre::where('name', 'hiphop')->get()->first()->id
          ],
          [
            'title' => 'Deutschland',
            'album' => 'Rammstein',
            'artist' => 'Rammstein',
            'duration' => 522,
            'year' => 2018,
            'audio' => 'Deutschland.mp3',
            'genre_id' => Genre::where('name', 'metal')->get()->first()->id
          ],
          [
            'title' => 'To Hell And Back',
            'album' => 'Heroes',
            'artist' => 'Sabaton',
            'duration' => 326,
            'year' => 2014,
            'audio' => 'To_Hell_And_Back.mp3',
            'genre_id' => Genre::where('name', 'metal')->get()->first()->id
          ]
      ];
    
      foreach ($data as $key => $value) {
        Song::create($value);
      }
    }
}
