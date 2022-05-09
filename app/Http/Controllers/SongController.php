<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Song;
use Illuminate\Support\Facades\Session;
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

    public function selectSong(Request $request) {
        $song_id = $request->input('song_id');

        if (Session::has('Playlist')) {
            $playlist = Session::get('Playlist');
            if (in_array($song_id, $playlist)) {
                $key = array_search($song_id, $playlist);
                unset($playlist[$key]);
                Session::put('Playlist', $playlist);
            } else {
                Session::push('Playlist', $song_id);
            }
        } else {
            $playlist = [$song_id];
            Session::put('Playlist', $playlist);
        } 
        Session::save();
        return redirect()->back();
    }
}
