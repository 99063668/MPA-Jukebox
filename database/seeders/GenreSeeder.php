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
            
            'name' => 'pop',
            'description' => 'pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziek'            
          ],
          [
            'name' => 'rock',
            'description' => 'rock is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziek'            
          ],
          [
            'name' => 'metal',
            'description' => 'metal is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziek
            stijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziek'
          ],
          [
            'name' => 'hiphop',
            'description' => 'hiphop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziek'
          ],
          [
            'name' => 'dance',
            'description' => 'dance is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair m
            kiekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziekstijlen uit de jaren \'60, \'70, \'80 en \'90 bevat. Pop is een populair muziekstijl die de meest populaire muziek'
          ]
      ];
    
      foreach ($data as $key => $value) {
        Genre::create($value);
      }
    }
}
