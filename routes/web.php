<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;

Route::get('/', [HomeController::class, 'index'])->name('home');;
Route::apiResource('todos', TodoController::class)->except(['index', 'show']);
