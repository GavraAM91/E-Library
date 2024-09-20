<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;


Route::as('books.')->middleware('auth')->prefix('books')->group(function () {
    Route::get('', [BooksController::class, 'index'])->name('index');
    Route::get('create', [BooksController::class, 'create'])->name('create');
    Route::post('store', [BooksController::class, 'store'])->name('store');
});
