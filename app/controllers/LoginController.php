<?php 
class LoginController extends BaseController {

	public static function login() {
	$usuario = Input::get('usuario');
	$password = Input::get('password');

	$success = Auth::attempt(array(
		'usuario' => $usuario, 
		'password' => $password
	));

	return Redirect::to('/');
	}

	public static function logOut() {
		Auth::logout();
		return Redirect::to('/');
	}
}
 ?>