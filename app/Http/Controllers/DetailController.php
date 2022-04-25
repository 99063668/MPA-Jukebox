<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller {
  public function show($id) {
    $details = Detail::where('songId', $id)->get();
    return view('genre.detail', [
        'id' => $id,
        'details' => $details
    ]);
}
    
}
