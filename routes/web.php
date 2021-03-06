<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", "MessageController@index");
Route::get("/messages", "MessageController@messages");
Route::post("/messages", "MessageController@create");

// Gibberish Url, throw 404
Route::any('{all}', function(){
    return view('errors.404');
})->where('all', '.*');
