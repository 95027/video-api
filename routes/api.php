<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\YoutubeController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('/user', [AuthController::class, 'userByToken']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/video', [YoutubeController::class, 'upload']);
});
