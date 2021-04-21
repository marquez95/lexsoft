<?php 
namespace App\Controllers\login;

use CodeIgniter\Controller;
use App\Models\LoginModel;
class Login extends Controller{
    
    
    //metodo index del login
    public function index()
    {   
        $mensaje = session('mensaje');
        $data = ['mensaje' =>$mensaje];
        $this->vistasPredeterminadas('login',$data);        
    }

    
    //validar login
    public function login_post()
    {
        return $this->validarPassword();
    }


    //validar password
    function validarPassword()
    {   
        helper('user');
        $loginModel = new LoginModel();
        $usuario = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        $datosUsuario = $loginModel->obtenerUsuario(['username' => $usuario]);
       
        if(count($datosUsuario) > 0 && verifyPassword($password, $datosUsuario[0]['password'])){
            
            $type = ["type" => $datosUsuario[0]['type']];

            $data = [
                "id_user" => $datosUsuario[0]['id_user'],
                "username" => $datosUsuario[0]['username'],
                "type" => $datosUsuario[0]['type'],
                "nombre" => $datosUsuario[0]['primer_nombre'],
                "apellido" => $datosUsuario[0]['apellido_paterno']
            ];

            $session = session();
            $session->set($data);
            
           return $this->compararUsuario($type);

           
        }
        return $this->index();
    }


    //comparar usuarios
    function compararUsuario($type) 
    {
        if ($type['type'] == 'admin') {
            return redirect()->to(base_url('admin'))->with('mensaje', '0');
        }else if ($type['type'] == 'cliente') {
            return redirect()->to(base_url('inicio'))->with('mensaje', '0');
        }else if($type['type'] == 'consultante') {
            echo "es consultante";
        }else{
            return redirect()->to(site_url('').'listar')->with('mensaje','exitoAgregar');
        }
    }


    //cerrar sesion
    function salir()
    {
        session();
        session_destroy();
        return redirect()->to(base_url('/'))->with('mensaje', 'exitoAgregar');
      
    }


    //vistas predeterminadas del template   
    private function vistasPredeterminadas($view,$data)
    {
        echo view("login/template/header");
        echo view("login/$view",$data);
        echo view("login/template/footer");
    }
}