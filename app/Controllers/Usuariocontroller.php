<?php
namespace App\Controllers;
use App\Models\usuario_Model;
use CodeIgniter\Controller;


class Usuariocontroller extends Controller
{
    public function __construct()
    {
        helper(['form','url']);
    }
    public function create(){

        $data['titulo']='Registro';
        echo view("front/head_view",$data);
        echo view("front/navbar_view");
        echo view("back/usuario/registro");
        echo view("front/footer_view");
    }
    public function formValidation()
    {
        $input = $this->validate([
                'nombre' => [
            'rules' => 'required|min_length[3]',
            'errors' => [
                'required' => 'El campo nombre es requerido',
                'min_length' => 'El campo nombre debe tener al menos 3 caracteres'
            ]
        ],
        'apellido' => [
            'rules' => 'required|min_length[3]|max_length[25]',
            'errors' => [
                'required' => 'El campo apellido es requerido',
                'min_length' => 'El campo apellido debe tener al menos 3 caracteres',
                'max_length' => 'El campo apellido no puede tener más de 25 caracteres'
            ]
        ],
        'usuario' => [
        'rules' => 'required|min_length[3]|is_unique[usuarios.usuario]',
        'errors' => [
        'required' => 'El campo usuario es requerido',
        'min_length' => 'El campo usuario debe tener al menos 3 caracteres',
        'is_unique' => 'Este nombre de usuario ya está registrado'
            ]
        ],
        'email' => [
            'rules' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'errors' => [
                'required' => 'El campo email es requerido',
                'min_length' => 'El campo email debe tener al menos 4 caracteres',
                'max_length' => 'El campo email no puede tener más de 100 caracteres',
                'valid_email' => 'Debe ingresar un email válido',
                'is_unique' => 'Este email ya está registrado'
            ]
        ],
        'pass' => [
            'rules' => 'required|min_length[3]|max_length[10]',
            'errors' => [
                'required' => "La contraseña es obligatoria",
                "min_length" => "La contraseña debe tener al menos 3 caracteres",
                "max_length" => "La contraseña no puede tener más de 10 caracteres"
            ]
        ],
    ]);
    $formModel = new usuario_Model();
    if (!$input){
        $data['titulo']='Registro';
        echo view("front/head_view",$data);
        echo view("front/navbar_view");
        //echo view("back/usuario/registro"),['validation'=>$this->validator];
        echo view("back/usuario/registro", ['validation' => $this->validator, 'titulo' => $data['titulo']]);
        echo view("front/footer_view");
    }else {
        $formModel->save([
            'nombre'=>$this->request-> getVar('nombre'),
            'apellido'=>$this->request-> getVar('apellido'),
            'usuario'=>$this->request-> getVar('usuario'),
            'email'=>$this->request->getVar('email'),
            'pass'=>password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
        ]);
        session()->setFlashdata('success','Usuario registrado con exito');
        return redirect()->to(base_url('/registro'));
    }
    }
 }