<?php

Route::get('/', ['uses' => 'IndexController@getIndex', 'as' => 'home']);
Route::resource('/fbgroup', 'FacebookGroupController', ['except' => 'show']);
Route::resource('/webinar', 'WebinarController');


