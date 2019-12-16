<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('/user', 'Api\LoginController@alluser');
});

Route::post('/login', 'Api\LoginController@login')->name('api.login');

Route::post('/register', 'Api\LoginController@register')->name('api.register');