<?php

// Use Implicit Controllers, keep this file clean

Route::resource('/fbgroup', 'FacebookGroupController', ['except' => 'show']);

Route::controller('/', 'IndexController');
