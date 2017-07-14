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

Route::get('/','PageController@page')->name('page');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home/add_parameter','HomeController@postParameter')->name('parameter:add');
Route::delete('/home/delete_parameter','HomeController@deleteParameter')->name('parameter:delete');
Route::get('/home/update_parameter','HomeController@getParameter')->name('parameter:update');

Route::post('/home/add_position','HomeController@postPosition')->name('position:add');
Route::delete('/home/delete_position','HomeController@deletePosition')->name('position:delete');
Route::get('/home/update_position','HomeController@getPosition')->name('position:update');
