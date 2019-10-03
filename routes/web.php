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

Route::get('/', 'PlansController@index');
Route::get('/add', 'PlansController@create');
Route::post('/add', 'PlansController@store');
Route::get('/{plan}', 'PlansController@show');
Route::get('/{plan}/edit', 'PlansController@edit');
Route::patch('/{plan}', 'PlansController@update');
Route::delete('/{plan}', 'PlansController@destroy');
