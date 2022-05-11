<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;
use Illuminate\Support\Facades\Session;

class SongSession 
{   
    public function hasSongs() {
        Self::initilize();
        $playlist = Session::get('Playlist');
        if (is_array($playlist) && count($playlist) > 0) {
            return true;
        } 
        return false;
    }

    public function hasTitle() {
        $title = Session::get('title');
        if ($title !== null) {
            return true;
        } 
        return false;
    }


    public function initilize() {
        if (!Session::has('Playlist')) {
            Session::put('Playlist', []);
            Session::save();
        }
    }
}
