<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function (){
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/genre', [GenreController::class, 'index'])->name('genre.index');

Route::get('/genre/{id}', [GenreController::class, 'show'])->name('genre.show');

Route::get('/song/{id}', [SongController::class, 'show'])->name('song.show');

//fallback route
// Route::fallback(FallbackController::class);
