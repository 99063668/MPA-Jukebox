<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;
use Illuminate\Support\Facades\Session;

class SongSession 
{
    
    public function hasSongs()
    {
        $playlist = Session::get('Playlist');

        if (is_array($playlist) && count($playlist) > 0) {
            return true;
        } 
        return false;
    }
}
