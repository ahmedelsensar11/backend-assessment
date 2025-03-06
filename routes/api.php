<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TimesheetController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;


//Authentication
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:api')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
});

//users
Route::apiResource('users', UserController::class);
Route::apiResource('projects', ProjectController::class);
Route::apiResource('timesheets', TimesheetController::class);
