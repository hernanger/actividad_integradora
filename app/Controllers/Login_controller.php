<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_Model;

class Login_controller extends BaseController
{
		public function index()
		{
			helper(['form','url']);

			$data['titulo']='Login';
	        echo view("front/head_view",$data);
	        echo view("front/navbar_view");
	        echo view("back/usuario/login");
	        echo view("front/footer_view");
		}

	public function auth()
	{
		$session = session();
		$model = new usuario_Model();

		// traemos los datos del formulario

		$usuario = $this->request-> getVar('usuario');
		$password = $this->request->getVar('pass');

		$data = $model ->where('usuario', $usuario)->first();
		if ($data){
			$pass = $data['pass'];
				$ba = $data['baja'];
					if ($ba == 'SI'){
						$session->setFlashdata('msg', 'Usuario dado de baja');
						return redirect()->to('/login');
					}
					$verify_pass = password_verify($password, $pass);
						if ($verify_pass){
							$ses_data = [
							'id_usuario'=> $data ['id_usuario'],
							'nombre'=> $data ['nombre'],
							'apellido'=> $data ['apellido'],
							'email'=> $data ['email'],
							'usuario'=> $data ['usuario'],
							'perfil_id'=> $data ['perfil_id'],
							'logged_in'=> true
							];
							$session->set($ses_data);

							session()->setFlashdata('msg', 'Bienvenido!!');
							return redirect()->to('/panel');
						}else{
							$session->setFlashdata('msg', 'Contraseña Incorrecta');
							return redirect()->to('/login');
						}
		}else{
			$session->setFlashdata('msg', 'No existe el usuario o es incorrecto');
			return redirect()->to('/login');
	    }
	} 
	public function logout()
		{
			$session = session();
			$session-> destroy();
			return redirect()->to('/');
		}	
}