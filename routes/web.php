<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perkenalan', function(){
    return view('perkenalan');
});
Route::get('/task', [TaskController::class, 'index']);
Route::get('/detail/{id}', [TaskController::class, 'detail']);
