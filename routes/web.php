<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CfFormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});



Route::resource('tasks', TaskController::class)->except(['show']);

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
