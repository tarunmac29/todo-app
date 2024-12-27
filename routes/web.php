<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);

Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');


Route::get('tasks/{id}/download-pdf', [TaskController::class, 'downloadPdf'])->name('tasks.downloadPdf');
Route::get('tasks/{id}/download-word', [TaskController::class, 'downloadWord'])->name('tasks.downloadWord');

Route::get('/', function () {
    return view('welcome');
});
