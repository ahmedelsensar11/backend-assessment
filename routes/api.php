<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProjectAttributeController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TimesheetController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UserProjectController;
use Illuminate\Support\Facades\Route;


//Authentication
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:api')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
});

Route::apiResource('users', UserController::class);
Route::apiResource('user-project', UserProjectController::class);
Route::apiResource('projects', ProjectController::class);
Route::apiResource('timesheets', TimesheetController::class);
Route::apiResource('project-attributes', ProjectAttributeController::class)->only(['index', 'store', 'update']);
