<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
	if(Auth::check()){
		return View::make('private.home');
	}else{
		return Redirect::to('/login');
	}
});

Route::get('/login', function(){
	return View::make('login');
});

Route::post('/login', function() {
	return LoginController::Login();
});

Route::group(array('before' => 'auth'), function() {
	Route::get('/logout', function() {
		return LoginController::logOut();
	});

	Route::get('borrarUsuario/{id}', function($id) {
		return UsuariosController::deleteUser($id);
	});

	Route::get('crearUsuario', function() {
		return View::make('private.users.createUser');
	});

	Route::post('newUser', function() {
		UsuariosController::createUser();
		return Redirect::to('/');
	});

	Route::get('/listaUsuarios', function() {
		return UsuariosController::listUsers();
	});
});
