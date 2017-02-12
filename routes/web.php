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




Route::get('/', 'CuboController@index');
Route::post('/', 'CuboController@create');
Route::post('/update', 'CuboController@update');
Route::post('/query', 'CuboController@query');


Route::group(['middleware' => ['web']], function () {
    //
});