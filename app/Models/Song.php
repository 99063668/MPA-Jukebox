<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;

class Song extends Model
{
    use HasFactory;

    public function genre(){
        return $this->belongsTo(Genre::class);
    }

    public function playlist(){
        return $this->belongsToMany(Playlist::class);
    }
}
