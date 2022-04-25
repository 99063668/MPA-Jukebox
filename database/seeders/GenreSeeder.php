<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //5 muziek genres
        $data = [
          [
            'name' => 'Hiphop',
            'image' => 'https://bewegeninzwartewaterland.nl/wp-content/uploads/2018/09/hiphop6.png'
          ],
          [
            'name' => 'Rap',
            'image' => 'https://www.ambiance-sticker.com/al_copyrighter.php?image=images/Image/sticker-musique-rap-et-casque-de-music-ambiance-sticker-KC10981.png&sens=25&color=28&forcew=310&forceh=310'
          ],
          [
            'name' => 'Edm',
            'image' => 'https://zeventa.com/storage/events/temp/1624984726_mobile.jpg'
          ],
          [
            'name' => 'Hardcore',
            'image' => 'https://d3kle7qwymxpcy.cloudfront.net/images/broadcasts/f8/bd/109063/2/c300.png'
          ],
          [
            'name' => 'Rock',
            'image' => 'https://www.gordlemonmusic.com/wp-content/uploads/2018/02/Gord-Lemon-Rock-Music-Production-600x375.jpg'
          ]
      ];
    
      foreach ($data as $key => $value) {
        Genre::create($value);
      }
    }
}
