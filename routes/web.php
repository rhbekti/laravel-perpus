<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', Controllers\UserController::class);
Route::resource('books', Controllers\BookController::class);
Route::resource('rents', Controllers\RentController::class);
