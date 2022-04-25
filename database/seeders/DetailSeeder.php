<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    public function run()
    {
        $data = [
          [
            'year' => '2018',
            'album' => 'album',
            'songId' => 1
          ],
      ];
    
      foreach ($data as $key => $value) {
        Detail::create($value);
      }
    }
}
