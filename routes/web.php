<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CfFormController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('tasks', TaskController::class);

Route::post('/cf-submit-form', 'FormController@submitForm')->name('cf-submit.form');


// Route::get('/tasks', [TaskController::class,'index'])->middleware(['auth', 'verified'])->name('tasks');


// Route::post('/tasks/create', [TaskController::class,'store'])->name('tasks.store');
// Route::patch('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');
// Route::delete('/tasks/{id}', [TaskController::class, 'delete'])->name('tasks.delete');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
