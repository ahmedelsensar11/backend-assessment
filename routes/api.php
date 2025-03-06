<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Authentication
Route::post('register', [AuthController::class, 'register']);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
