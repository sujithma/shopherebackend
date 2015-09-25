<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Auth\AuthController@index');
Route::post('/', 'Auth\AuthController@logincheck');

Route::get('/logout', 'AdminController@logout');
Route::get('/home', 'AdminController@home');
Route::get('/product', 'AdminController@product');
Route::get('/purchase', 'AdminController@purchase');
Route::get('/sales', 'AdminController@sales');
Route::get('/banking', 'AdminController@banking');
Route::get('/profit', 'AdminController@profit');
