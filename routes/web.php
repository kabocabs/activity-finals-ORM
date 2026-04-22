<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


Route::get('/', function () {
    return view('welcome');   // change to 'home' if you have home.blade.php
})->name('home');


Route::resource('books', BookController::class);