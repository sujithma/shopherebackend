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
Route::group(['middleware' => ['auth']], function () {

	Route::get('/logout', 'AdminController@logout');
	Route::post('/delete', 'AdminController@delete');
	Route::post('/getDetail', 'AdminController@getDetail');

	Route::get('/home', 'AdminController@home');

	Route::get('/product', 'ProductController@product');
	Route::get('/product/add', 'ProductController@addProduct');

	Route::get('/purchase', 'PurchaseController@purchase');

	Route::get('/sales', 'salesController@sales');
	Route::post('/edit-sale', 'salesController@editSale');

	Route::get('/banking', 'BankingController@banking');
	Route::post('/add-transaction', 'BankingController@addTransaction');

	Route::get('/profit', 'ProfitController@profit');

	
	
	
});
