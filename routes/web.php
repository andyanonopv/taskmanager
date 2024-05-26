<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CfFormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubtasksController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

Route::get('/due-tasks', [TaskController::class , 'dueTasks'])->name('due-tasks');

Route::get('/due-tasks/display-rows', [TaskController::class , 'displayRows'])->name('due-tasks.rows');

Route::get('/tasks/display-rows', [TaskController::class , 'displayRows'])->name('tasks.rows');



Route::middleware('auth')->group(function () {
   Route::middleware('admin')->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('verified')->name('dashboard');
   });
   Route::middleware('user')->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('verified')->name('dashboard');
   });
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('verified')->name('dashboard');

    // Route::get('/profile/upload', [ImageController::class, 'create'])->name('profile.image.create');
    // Route::post('/profile/upload', [ImageController::class, 'store'])->name('profile.image.store');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
