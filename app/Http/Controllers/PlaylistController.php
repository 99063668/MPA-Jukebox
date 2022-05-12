<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\SongSession;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlaylistController extends Controller
{
    public function index() {
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

    // nieuwe playlist aanmaken
    public function create() {
        return view('playlist.create');
    }

    // opgegeven titel opslaan
    public function save() {
        $hasTitle = SongSession::hasTitle();
        return view('playlist.playlist', [
            'hasTitle' => $hasTitle
        ]);
    }

    // controleren of er een titel is ingevoerd + titel in sessie stoppen
    public function choosenTitle(Request $request) {
        $validator= Validator::make($request->all(), [
            'title' => 'required'
        ]);

        // validation fails
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

    // geselecteerde nummers in database toevoegen in de gekozen playlist
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
