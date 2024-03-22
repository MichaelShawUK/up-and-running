<?php

use App\Http\Controllers\MySampleResourceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/tasks', [TaskController::class, 'index']);


Route::get('/test', function () {
    return 'include / in path';
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('/sample', MySampleResourceController::class);