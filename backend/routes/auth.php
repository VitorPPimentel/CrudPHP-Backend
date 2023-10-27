<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/getAllUsers', [UserController::class, 'getAllUsers']);
Route::post('/auth', [UserController::class, 'auth']);
Route::post('/createUser', [UserController::class, 'createUser']);
