<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;


Route::get('/', [BookController::class, 'index']);

Route::get('/book/{book}', [BookController::class, 'book']);
