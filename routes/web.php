<?php


use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'User'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/search', 'RoutesController@search')->name('routes.search');
    Route::get('/booking', 'BookingController@booking')->name('routes.booking');
});
Route::group(['namespace' => 'Auth'], function () {
    Route::get('login', 'LoginController@index')->name('login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');
    Route::get('register', 'RegisterController@index');
    Route::post('register', 'RegisterController@register')->name('register');
});
Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:penumpang'])->group(function () {
        Route::get('/booking/create', 'BookingController@create')->name('booking.create');
        Route::post('/booking', 'BookingController@store')->name('booking.store');
        Route::get('/payment/create/{booking}', 'PaymentController@create')->name('payment.create');
        Route::post('/payment',  'PaymentController@store')->name('payment.store');
    });
});
