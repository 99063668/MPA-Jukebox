<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        return view('genre');
    }

    public function show($id)
    {
        $genre = Genre::where('id', $id)->first();
        return view('genre.genre', [
            'id' => $id,
            'genre' => $genre
        ]);
    }
}
