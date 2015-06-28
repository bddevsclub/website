<?php


Route::resource('/fbgroup', 'FacebookGroupController', ['except' => 'show']);
Route::resource('/webinar', 'WebinarController');

Route::controller('/', 'IndexController');
