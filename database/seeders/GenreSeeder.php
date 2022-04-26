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
            'image' => 'https://www.dansisvooriedereen.nl/wp-content/uploads/2020/06/461d2d6b331f3999ddae6304c1276d74.jpg'
          ],
          [
            'name' => 'Rap',
            'image' => 'https://focusonbelgium.be/sites/default/files/shutterstock_517774291_rap_1.jpg'
          ],
          [
            'name' => 'House',
            'image' => 'https://www.partyscene.nl/ckfinder/userfiles/images/EDMcrowd.jpg'
          ],
          [
            'name' => 'Hardcore',
            'image' => 'https://d3kle7qwymxpcy.cloudfront.net/images/broadcasts/f8/bd/109063/2/c300.png'
          ],
          [
            'name' => 'Metal',
            'image' => 'https://flypaper.soundfly.com/wp-content/uploads/2016/10/metal-covers-header.png'
          ]
      ];
    
      foreach ($data as $key => $value) {
        Genre::create($value);
      }
    }
}
