<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Models\Country;
use App\Models\Faq;
use App\Models\Review;
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
        'faqs' => Faq::query()->visible()->get(),
        'reviews' => Review::query()->visible()->get(),
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


Route::get('/country/{country}', [CountryController::class, 'index'])->name('country');

Route::get('/contacts', [ContactController::class, 'index'])->name('contact');
Route::post('/contacts/send_message', [ContactController::class, 'sendMessage'])->name('contact.send_message');
