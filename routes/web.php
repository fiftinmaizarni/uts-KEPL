<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\SpotifyController; 
 
// Route untuk mendapatkan semua tim 
Route::get('api/spotify', [SpotifyController::class, 'getLyrics']); 
