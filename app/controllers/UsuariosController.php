<?php 
class UsuariosController extends BaseController {
	public static function createUser() {
		$newUserName = Input::get('newUser');
		$newUserPassword = Input::get('newPassword');

		$newUser = new Usuario;
		$newUser -> usuario = $newUserName;
		$newUser -> password = Hash::make($newUserPassword);
		$newUser -> save();
	}

	public static function deleteUser($id) {
		$userToDelete = Usuario::find($id);
		$message = "";
		if($userToDelete) {
			$userToDelete-> delete();
			$message = "Usuario $id borrado exitosamente";
		}else{
			$message = "Error al borrar el usuario, el id $id no existe";
		}
		return View::make('private.message') -> with(array('mensaje' => $message, 'title' => 'Borrar usuario'));
	}

	public static function listUsers() {
		return View::make('private.users.list') -> with (array('usuarios' => Usuario::all(), 'id' => 1));
	}
}
 ?>