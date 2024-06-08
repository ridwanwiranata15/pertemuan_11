<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', [TaskController::class, 'index']);

Route::get('/perkenalan', function(){
    return view('perkenalan');
});


Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/login', [AuthController::class, 'login']);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('/signin', [AuthController::class, 'signin']);
    Route::post('/signup', [AuthController::class, 'signup']);


    Route::get('/task', [TaskController::class, 'index'])->middleware('isUser');
Route::get('/detail/{id}', [TaskController::class, 'detail'])->middleware('isUser');

Route::get('/tasks/list', [TaskController::class, 'list'])->middleware('isUser');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('task.create')->middleware('isUser');
Route::get('/tasks/edit/{id}', [TaskController::class, 'edit'])->name('task.edit')->middleware('isUser');
Route::post('/tasks/store', [TaskController::class, 'store'])->name('task.store')->middleware('isUser');
Route::put('/tasks/update', [TaskController::class, 'store'])->name('task.update')->middleware('isUser');
Route::delete('/tasks/delete/{id}', [TaskController::class, 'delete']);

Route::get('/status', [StatusController::class, 'index'])->name('status.index')->middleware('isUser');
Route::get('/status/create', [StatusController::class, 'create'])->name('status.create')->middleware('isUser');
Route::post('/status/store', [StatusController::class, 'store'])->name('status.store')->middleware('isUser');
Route::get('/status/edit/{id}', [StatusController::class, 'edit'])->name('status.edit')->middleware('isUser');
Route::put('/status/update/{id}', [StatusController::class, 'update'])->name('status.update')->middleware('isUser');
Route::delete('/status/delete/{id}', [StatusController::class, 'delete'])->name('status.delete')->middleware('isUser');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index')->middleware('isUser');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create')->middleware('isUser');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store')->middleware('isUser');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit')->middleware('isUser');
Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update')->middleware('isUser');
Route::delete('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete')->middleware('isUser');

Route::get('/project', [ProjectController::class, 'index'])->name('project.index')->middleware('isUser');
Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create')->middleware('isUser');
Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store')->middleware('isUser');
Route::get('/project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit')->middleware('isUser');
Route::put('/project/update/{id}', [ProjectController::class, 'update'])->name('project.update')->middleware('isUser');
Route::delete('/project/delete/{id}', [ProjectController::class, 'delete'])->name('project.delete')->middleware('isUser');
