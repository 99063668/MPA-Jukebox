<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Song;
use App\Models\PlaylistSong;
use App\Models\SongSession;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class PlaylistController extends Controller
{
    public function index()
    {
        $playlists = Playlist::all();
        return view('playlist.playlist', ['playlists' => $playlists]);
    }

    public function overview($id) {
        $playlists = Playlist::find($id);

        if ($playlists == null) {
            return redirect()->route('playlist.index');
        }
        $songDetail = $playlists->songs()->get();

        return view('playlist.playlistDetail', [
            'id' => $id,
            'playlist' => $playlists,
            'songDetail' => $songDetail
        ]);
    }

    public function create() {
        return view('playlist.create');
    }

    public function save() {
        $hasTitle = SongSession::hasTitle();
        return view('playlist.playlist', [
            'hasTitle' => $hasTitle
        ]);
    }

    public function choosenTitle(Request $request) {
        $validator= Validator::make($request->all(), [
            'title' => 'required'
        ]);

        //validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $title = $request->input('title');
        Session::put($title);
        Session::save();
        echo($title);
        $data = array('name'=>$title);
        DB::table('playlists')->insert($data);
        return redirect()->back();
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
