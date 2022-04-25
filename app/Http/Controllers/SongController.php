<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller {
    public function index() {
        return view('genre');
    }

    public function overview($genre_id) {
        $genre = Genre::find($genre_id);
        $songs = Song::where('genre_id', $genre_id)->get();
        return view('song.genre', [
            'genre' => $genre,
            'songs' => $songs
        ]);
    }

    public function show($id) {
        $song = Song::find($id);
        return view('song.detail', [
            'id' => $id,
            'song' => $song
        ]);
    }
}
