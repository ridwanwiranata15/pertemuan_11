<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;

Route::get('/', [TaskController::class, 'index']);

Route::get('/perkenalan', function(){
    return view('perkenalan');
});
Route::get('/task', [TaskController::class, 'index']);
Route::get('/detail/{id}', [TaskController::class, 'detail']);

Route::get('/tasks/list', [TaskController::class, 'list']);
Route::get('/tasks/create', [TaskController::class, 'create'])->name('task.create');
Route::get('/tasks/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
Route::post('/tasks/store', [TaskController::class, 'store'])->name('task.store');
Route::put('/tasks/update', [TaskController::class, 'store'])->name('task.update');
Route::delete('/tasks/delete/{id}', [TaskController::class, 'delete']);

Route::get('/status', [StatusController::class, 'index'])->name('status.index');
Route::get('/status/create', [StatusController::class, 'create'])->name('status.create');
Route::post('/status/store', [StatusController::class, 'store'])->name('status.store');
Route::get('/status/edit/{id}', [StatusController::class, 'edit'])->name('status.edit');
Route::put('/status/update/{id}', [StatusController::class, 'update'])->name('status.update');
Route::delete('/status/delete/{id}', [StatusController::class, 'delete'])->name('status.delete');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
Route::get('/project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
Route::put('/project/update/{id}', [ProjectController::class, 'update'])->name('project.update');
Route::delete('/project/delete/{id}', [ProjectController::class, 'delete'])->name('project.delete');