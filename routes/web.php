<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/genres', [GenreController::class, 'index']);
Route::get('/books', [BookController::class, 'index']);