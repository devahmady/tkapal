<?php


use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'User'], function () {
    Route::get('/', 'HomeController@index')->name('user.home');
    Route::post('/search', 'RoutesController@search')->name('routes.search');
});
