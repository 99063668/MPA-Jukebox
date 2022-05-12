<?php

namespace App\Http\Controllers;

use App\Models\Genre;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // pagina weergeven met data
    public function index()
    {
        $genres = Genre::all();
        return view('home', ['genres' => $genres]);
    }
}
