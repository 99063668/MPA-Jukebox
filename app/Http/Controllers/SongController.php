<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller {
    public function index() {
        return view('genre');
    }

    public function show($id) {
        $genre = Genre::find($id);
        $songs = Song::where('genreId', $id)->get();
        return view('genre.genre', [
            'genre' => $genre,
            'songs' => $songs
        ]);
    }
}
