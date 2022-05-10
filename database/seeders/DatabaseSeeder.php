<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(SongSeeder::class);
        $this->call(PlaylistSeeder::class);
        // $this->call(PlaylistSongSeeder::class);
    }
}
