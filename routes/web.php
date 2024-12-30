<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

Route::resource('tasks', TaskController::class);

Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');


Route::get('tasks/{id}/download-pdf', [TaskController::class, 'downloadPdf'])->name('tasks.downloadPdf');
Route::get('tasks/{id}/download-word', [TaskController::class, 'downloadWord'])->name('tasks.downloadWord');

Route::get('/', function () {
    return view('welcome');
});

Route::view('register','auth.register')->name('register');
Route::post('registerSave',[UserController::class,'register'])->name('registerSave');

Route::view('login','auth.login')->name('login');
Route::post('loginMatch',[UserController::class,"login"])->name('loginMatch');

Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('TaskIndex',[UserController::class,"isUserLogin"])->name('TaskIndex');