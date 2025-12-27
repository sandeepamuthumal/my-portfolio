<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::resource('projects', ProjectController::class);
    Route::post('/projects/reorder', [ProjectController::class, 'reorder'])->name('projects.reorder');
});
