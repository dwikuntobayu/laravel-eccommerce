<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('signup', 'SentinelAuthController@get_signup')->name('get_signup');
Route::post('signup', 'SentinelAuthController@post_signup')->name('post_signup');

Route::get('login', 'SentinelAuthController@get_login')->name('get_login');
Route::post('login', 'SentinelAuthController@post_login')->name('post_login');
Route::get('logout', 'SentinelAuthController@logout')->name('logout');

Route::get('reset-password', 'SentinelAuthController@get_reset_password')->name('get_reset_password');
Route::post('reset-password', 'SentinelAuthController@post_reset_password')->name('post_reset_password');

Route::get('reset-password/{token_password}', 'SentinelAuthController@get_process_password')->name('get_process_password');
Route::put('reset-password/{token_password}', 'SentinelAuthController@put_process_password')->name('put_process_password');