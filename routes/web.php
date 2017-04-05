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



Route::group(['a' => ['web']] , function () {


		Route::get('/', function () {
		    return view('welcome');
		});

		Auth::routes();

		Route::get('/home', 'HomeController@index');

		Route::get('/bienvenido', function(){
			return view('bienvenido');
		});


		// PRODUCTS

		Route::get('nuevo-producto', ['as' => 'create.productos' , 'uses' => 'ProductoController@create']);
		Route::post('producto', ['as' => 'producto.store' , 'uses' => 'ProductoController@store']);
		Route::get('producto/{id}/edit', ['as' => 'producto.edit', 'uses' =>'ProductoController@edit']);
	 	Route::post('producto/update/{id}', ['as' => 'producto.update', 'uses' =>'ProductoController@update']);
	 	Route::get('producto/{id}',['as' => 'producto.delete', 'uses' =>'ProductoController@delete']);


	


});


