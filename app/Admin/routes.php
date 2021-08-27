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
    $router->resource('countries', 'CountryController');
    $router->resource('reviews', 'ReviewController');
    $router->resource('faqs', 'FaqController');
});
