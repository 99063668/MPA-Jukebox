<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function index()
    {
        $playlists = Playlist::all();
        return view('playlist.playlist', ['playlists' => $playlists]);
    }

    public function show($id) {
        $playlist = Playlist::find($id);
        return view('playlist.playlist', [
            'id' => $id,
            'playlist' => $playlist
        ]);
    }

    public function addSelected($playlist_id) {
        $song_id = Session::get('Playlist');
        $playlist = Playlist::find($playlist_id);
        $playlist->songs()->sync($song_id);
        Session::save();

        $playlist = new Playlist();
        Session::forget('Playlist');
        return redirect()->back();
    }
}
