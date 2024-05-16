<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CfFormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class , 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('tasks', TaskController::class)->except(['show']);

Route::get('/due-tasks', [TaskController::class , 'dueTasks'])->name('due-tasks');

Route::get('/due-tasks/display-rows', [TaskController::class , 'displayRows'])->name('due-tasks.rows');

Route::get('/tasks/display-rows', [TaskController::class , 'displayRows'])->name('tasks.rows');






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
