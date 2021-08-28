<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TourTypeController;
use App\Models\Country;
use App\Models\Faq;
use App\Models\Review;
use App\Models\Tour;
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
        'tours' => Tour::query()->with('tourType')->visible()->limit(12)->get(),
        'countries' => Country::query()->withCount('hotels')->visible()->get(),
        'faqs' => Faq::query()->visible()->get(),
        'reviews' => Review::query()->visible()->get(),
        'transparentHeader' => true,
    ]);
})->name('home');

Route::get('/tours', function () {
    return view('tours');
})->name('tours');

Route::get('/tours-group', function () {
    return view('tours-group');
})->name('tours-group');

Route::get('/agents', [Controller::class, 'agents'])->name('agents');

Route::get('/tour-type/{tourType}', [TourTypeController::class, 'index'])->name('tour-type');
Route::get('/tour/{tour}', [TourController::class, 'index'])->name('tour');

Route::get('/country/{country}', [CountryController::class, 'index'])->name('country');
Route::get('/hotel/{hotel}', [HotelController::class, 'index'])->name('hotel');

Route::get('/contacts', [ContactController::class, 'index'])->name('contact');
Route::post('/contacts/send-message', [ContactController::class, 'sendMessage'])->name('contact.send-message');
