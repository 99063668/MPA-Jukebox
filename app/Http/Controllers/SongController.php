<?php

namespace App\Http\Controllers;
use App\Models\Song;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function show($id)
    {
        $song = Song::where('genreId', $id)->first();
        return view('genre.genre', [
            'id' => $id,
            'song' => $song
        ]);
    }
}