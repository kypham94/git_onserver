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

Route::get('/','Web\IndexController@index');
Route::get('/tructiep/{slug}.html','Web\IndexController@content');
Route::get('/tructiep/{slug}/{link}','Web\IndexController@link');
