<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('todo-list', 'todo-list/⚡index')
    ->middleware(['auth', 'verified'])
    ->name('todo');

require __DIR__.'/settings.php';