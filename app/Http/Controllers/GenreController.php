<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\SongSession;
use Database\Seeders\SongSeeder;
use Illuminate\Http\Request;

class GenreController extends Controller {
    public function show($id) {
        $genre = Genre::where('id', $id)->first();
        $count = SongSession::hasSongs();
        return view('song.genre', [
            'id' => $id,
            'genre' => $genre,
            'count' => $count
        ]);
    }
}
