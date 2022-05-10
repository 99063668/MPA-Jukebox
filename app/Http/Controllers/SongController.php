<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Playlist;
use App\Models\Song;
use App\Models\SongSession;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SongController extends Controller {
    public function index() {
        return view('genre');
    }

    public function overview($genre_id) {
        $playlist = Playlist::where('name', 'Test playlist')->where('user_id', auth()->id())->first();
        $genre = Genre::find($genre_id);
        $songs = Song::where('genre_id', $genre_id)->get();
        $hasSongs = SongSession::hasSongs();
        return view('song.genre', [
            'playlist' => $playlist,
            'genre' => $genre,
            'songs' => $songs,
            'hasSongs' => $hasSongs
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
        $validator= Validator::make($request->all(), [
            'song_id' => 'required|integer|exists:songs,id'
        ]);

        //vlidation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
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
