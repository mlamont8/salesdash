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

Auth::routes();

Route::group(['middleware'=>'auth'],function(){
		Route::get('/', function(){
			return view('welcome');
		});
	Route::get('sales/dash', 'HomeController@index')->name('dash');
	Route::post('sales/dash', 'HomeController@store');
	Route::get('sales/create', 'HomeController@create')->name('create');

	


});





// Route::get('/home', 'HomeController@index');
