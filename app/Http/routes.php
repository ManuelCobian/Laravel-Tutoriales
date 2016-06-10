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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=> 'admin'],function(){

	Route::resource('users', 'UserController');//tomar los metodos de un controlador y lo obtine como ruta
	Route::get('users/{id}/destroy',[//ruta para eliminar

			'uses'=>'UserController@destroy',
			'as'=>'admin.users.destroy'
		]);


});
