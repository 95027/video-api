<?php

use App\Http\Controllers\YoutubeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [YoutubeController::class, 'videosPage']);
Route::get('/videos', [YoutubeController::class, 'getVideos']);
