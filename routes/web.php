<?php

use App\Models\Country;
use App\Models\TourType;
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
    return view('home', [
        'tourTypes' => TourType::query()->visible()->get(),
        'countries' => Country::query()->visible()->get(),
        'transparentHeader' => true,
    ]);
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

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/tour', function () {
    return view('tour');
})->name('tour');

Route::get('/agentam', function () {
    return view('agentam');
})->name('agentam');

Route::get('/hotel', function () {
    return view('hotel');
})->name('hotel');

Route::get('/tours-group', function () {
    return view('tours-group');
})->name('tours-group');
