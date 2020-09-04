<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::post('login', 'API\LoginController@login');

Route::middleware('jwt.auth')->get('teste', function () {
    return 'Só passa com JWT';
});
