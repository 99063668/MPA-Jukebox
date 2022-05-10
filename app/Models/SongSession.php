<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;
use Illuminate\Support\Facades\Session;

class SongSession 
{
    // public function show($id) {
    //     $playlist = Session::get('playlist');
    //     $genre = Genre::where('id', $id)->first();
    //     $count = SongSession::hasSongs();
    //     var_dump($count);
    //     return view('song.genre', [
    //         'id' => $id,
    //         'genre' => $genre,
    //         'playlist' => $playlist,
    //         'count' => $count
    //     ]);
    // }
    
    public function hasSongs()
    {
        Self::initilize();
        $playlist = Session::get('Playlist');
        if (is_array($playlist) && count($playlist) > 0) {
            return true;
        } 
        return false;
    }

    public function initilize()
    {
        if (!Session::has('Playlist')) {
            Session::put('Playlist', []);
            Session::save();
        }
    }
}
