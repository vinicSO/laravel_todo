<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/task/new', [TaskController::class, 'create_view'])->name('task.create_view');
Route::get('/task/{id}', [TaskController::class, 'show'])->name('task.show');

Route::post('/task', [TaskController::class, 'create'])->name('task.create');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
