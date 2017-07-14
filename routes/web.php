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
Route::post('/home/add_parameter','HomeController@add_parameter')->name('home_add_parameter');
Route::delete('/home/delete_parameter','HomeController@index')->name('home_delete_parameter');
//Route::post('/home/','HomeController@update_parameter')->name('home_update_parameter');

Route::post('/home/add_position','HomeController@add_position')->name('home_add_position');
Route::delete('/home/delete_position','HomeController@delete_position')->name('home_delete_position');
