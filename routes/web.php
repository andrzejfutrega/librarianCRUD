<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\LoanController;

Route::resource('libraries', LibraryController::class);
Route::resource('books', BookController::class);
Route::resource('readers', ReaderController::class);
Route::resource('loans', LoanController::class);

Route::get('/', function () {
    return redirect()->route('libraries.index');
});