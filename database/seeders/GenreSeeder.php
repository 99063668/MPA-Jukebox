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
            'name' => 'hiphop'
          ],
          [
            'name' => 'rap'
          ],
          [
            'name' => 'edm'
          ],
          [
            'name' => 'dance'
          ],
          [
            'name' => 'rock'
          ]
      ];
    
      foreach ($data as $key => $value) {
        Genre::create($value);
      }
    }
}
