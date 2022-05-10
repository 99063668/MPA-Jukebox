<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Song;
use App\Models\PlaylistSong;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function index()
    {
        $playlists = Playlist::all();
        return view('playlist.playlist', ['playlists' => $playlists]);
    }

    public function overview($id) {
        $playlists = Playlist::find($id);
        // $songs = PlaylistSong::where('playlist_id', $id)->get();

        $songDetail = $playlists->songs()->get();

        //SELECT songs.id, playlist_songs.song_id 
        //FROM songs 
        //INNER JOIN playlist_songs 
        //ON songs.id = playlist_songs.song_id = 1;

        // $songDetail = DB::table('songs')
        // ->select('songs.id', 'playlist_songs.song_id')
        // ->join('playlist_songs', 'songs.id', '=', 'playlist_songs.song_id')
        // ->where('songs.id', '=', $id)
        // ->where('songs.id', 'where playlist_songs.song_id =', $id)
        // ->get();

        return view('playlist.playlistDetail', [
            'id' => $id,
            'playlist' => $playlists,
            // 'songs' => $songs,
            'songDetail' => $songDetail
        ]);
    }

    public function create() {
        // if () {
            return view('playlist.playlistCreate');
        // }
        // return view('playlist.playlist');
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
