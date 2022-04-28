<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Login
Route::get('/', function (){
    return view('auth/login');
});

Auth::routes();

// Home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Genre
Route::get('/genre', [GenreController::class, 'index'])->name('genre.index');
Route::get('/genre/{id}', [GenreController::class, 'show'])->name('genre.show');

// Song
Route::get('/song/genre/{id}', [SongController::class, 'overview'])->name('song.index');
Route::get('/song/{id}', [SongController::class, 'show'])->name('song.show');
Route::post('/song/selected', [SongController::class, 'selectSong'])->name('song.selectSong');

//Playlist
Route::get('/playlist', [PlaylistController::class, 'index'])->name('playlist.index');
Route::get('/playlist/{id}', [PlaylistController::class, 'show'])->name('playlist.show');
Route::get('/playlist/add/{id}', [SongController::class, 'addSelected'])->name('playlist.addSelected');

// Fallback
// Route::fallback(FallbackController::class);
