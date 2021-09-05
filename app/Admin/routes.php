<?php

use Encore\Admin\Facades\Admin;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Admin::routes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
    'as' => config('admin.route.prefix') . '.',
], function (Router $router) {
    $router->get('/', 'HomeController@index');
    $router->resource('tour-types', 'TourTypeController');
    $router->resource('tours', 'TourController');
    $router->resource('group-tours', 'GroupTourController');
    $router->resource('countries', 'CountryController');
    $router->resource('hotels', 'HotelController');
    $router->resource('reviews', 'ReviewController');
    $router->resource('faqs', 'FaqController');
    $router->resource('contact-messages', 'ContactMessageController');
    $router->resource('files', 'FilesController');
    $router->resource('agency-text', 'AgencyTextController');
});
