<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/country', function () {
    return view('country');
})->name('country');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/tours', function () {
    return view('tours');
})->name('tours');
