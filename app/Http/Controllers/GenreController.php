<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\SongSession;
use Illuminate\Support\Facades\Session;
use Database\Seeders\SongSeeder;
use Illuminate\Http\Request;

class GenreController extends Controller {
    public function show($id) {
        $playlist = Session::get('playlist');
        $genre = Genre::where('id', $id)->first();
        return view('song.genre', [
            'id' => $id,
            'genre' => $genre,
            'playlist' => $playlist
        ]);
    }
}
