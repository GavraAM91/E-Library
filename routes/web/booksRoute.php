<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;


Route::as('books.')->prefix('books')->group(function () {
    Route::get('', [BooksController::class, 'index'])->name('index');
    Route::post('store', [BooksController::class, 'store'])->name('create');
});
