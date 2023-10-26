<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectsController;

// Route::post('/projects','App\http\Controllers\ProjectsController@create');

Route::get('/projects', [ProjectsController::class, 'getAll']);
Route::post('/projects', [ProjectsController::class, 'create']);
Route::get('/projects/{id}', [ProjectsController::class, 'getById']);
Route::put('/projects/{id}', [ProjectsController::class, 'update']);
Route::delete('/projects/{id}', [ProjectsController::class, 'delete']);
