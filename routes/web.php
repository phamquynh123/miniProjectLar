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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'locale'], function() {
	Route::get("/news/list",'NewsController@index');
	Route::get('change-language/{language}', 'NewsController@changeLanguage')->name('change-language');
});
