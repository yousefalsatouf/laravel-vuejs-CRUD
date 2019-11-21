<?php

Route::get('/{any}', function () {
    return view('post');
})->where('any', '.*');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

