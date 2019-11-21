<?php

// api.php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/post/create', 'PostController@store');
Route::get('/post/edit/{id}', 'PostController@edit');
Route::post('/post/update/{id}', 'PostController@update');
Route::delete('/post/delete/{id}', 'PostController@delete');
Route::get('/posts', 'PostController@index');

Route::post('auth/register', 'AuthController@register');

/*Route::post('auth/login', 'AuthController@login');

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('auth/user', 'AuthController@user');
   // Route::post('auth/logout', 'Api\Auth\AuthLogoutController');
});
Route::group(['middleware' => 'jwt.refresh'], function(){
    Route::get('auth/refresh', 'AuthController@refresh');
});*/
