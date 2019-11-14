<?php

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

// with this route we push any url to the same page ...
// to define the route via vue u need to set the rout here like the next ...

Route::get('/{any}', function () {
    return view('post');
})->where('any', '.*');
