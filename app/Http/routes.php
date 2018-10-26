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
Route::resource('implementos', 'ImplementosController');

Route::get('/', 'InicioController@index');

Route::get('login', 'LoginController@index');

Route::get('admin', 'HomeController@index');

Route::get('home', 'HomeController@index');

/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/

Route::get('home', function(){
	return view('home');
});


Route::get('entrenador', function(){
	return view('sitioweb.entrenador');
});

Route::get('galeria', function(){
	return view('sitioweb.galeria');
});

Route::get('blog', function(){
	return view('sitioweb.blog');
});

Route::get('contacto', function(){
	return view('sitioweb.contacto');
});