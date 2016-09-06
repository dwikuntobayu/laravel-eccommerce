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

Route::get('/', function () {
    return view('welcome');
});

//article Resources
/********************* article ***********************************************/
Route::resource('article','\App\Http\Controllers\ArticleController');
Route::post('article/{id}/update','\App\Http\Controllers\ArticleController@update');
Route::get('article/{id}/delete','\App\Http\Controllers\ArticleController@destroy');
Route::get('article/{id}/deleteMsg','\App\Http\Controllers\ArticleController@DeleteMsg');
/********************* article ***********************************************/



Route::resource('products', 'ProductController');

Route::resource('handphones', 'HandphoneController');

Route::resource('glasses', 'GlassController');

Route::resource('skies', 'SkyController');

Route::resource('planets', 'PlanetController');