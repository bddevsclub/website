<?php

// Admin Routes
Route::group(['middleware' => 'auth'], function () {
    Route::resource('/fbgroup', 'FacebookGroupController', ['except' => 'show']);
    Route::resource('/webinar', 'WebinarController', ['except' => 'show']);
});

//Website Routes
Route::get('/', ['uses' => 'IndexController@getIndex', 'as' => 'home']);
Route::get('/webinar/{webinar}', ['as' => 'webinar.show', 'uses' => 'WebinarController@show']);

Route::any('/auth/login', ['as' => 'auth.login', 'uses' => 'AuthController@login']);
Route::any('/auth/logout', ['as' => 'auth.logout', 'uses' => 'AuthController@logout']);

