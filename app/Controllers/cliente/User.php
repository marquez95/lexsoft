<?php 
namespace App\Controllers\admin;
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\PaisModel;
use App\Models\DepartamentoModel;
use App\Models\MunicipioModel;

class User extends Controller{

    //index
    public function new_user()
    {   
        $this->vistaDashboarAdmin('user/newUser',[]);   
    }

    //datos de usuario
    public function datosUsuario(){
        helper('user');
        $data = [
            'primer_nombre'     =>$this->request->getVar('primer_nombre'),
            'segundo_nombre'    => $this->request->getVar('segundo_nombre'),
            'tercer_nombre'     => $this->request->getVar('tercer_nombre'),
            'apellido_paterno'  => $this->request->getVar('apellido_paterno'),
            'apellido_materno'  => $this->request->getVar('apellido_materno'),
            'dui'               => $this->request->getVar('dui'),
            'fecha_nacimiento'  => $this->request->getVar('fecha_nacimiento'),
            'direccion'         => $this->request->getVar('direccion'),
            'pais'              => $this->request->getVar('pais'),
            'departamento'      => $this->request->getVar('departamento'),
            'municipio'         => $this->request->getVar('municipio'),
            'username'          => $this->request->getVar('username'),
            'numero_telefono'   =>$this->request->getVar('numero_telefono'),
            'email'             => $this->request->getVar('email'), 
            'password'          => hashPassword($this->request->getVar('password')),
            'type'              => $this->request->getVar('type')
        ];
        return $data;
    }
    

    //insertar nuevo usuario
    public function insert_user()
    {   
        helper('user');
        $User = new UserModel();
        $datos=$this->datosUsuario();
        $respuesta = $User->insert($datos);
        if ($respuesta >0) {
            return redirect()->to(site_url('').'listar')->with('mensaje','exitoAgregar');
        }else{
            return redirect()->to(site_url('').'listar')->with('mensaje','errorAgregar');
        }
       
    }  


    //listar usuarios
    public function listar(){
        $userModel = new UserModel();
        $mensaje = session('mensaje');
        $data = [
            'datos' => $userModel->asObject()->get(),
            'mensaje' =>$mensaje];
        
        $this->vistaDashboarAdmin('user/listar',$data);

    }


    //buscar usuarios
    public function buscar(){
       
        $userModel = new UserModel();
		$data = ['datos' => $userModel->asObject()->get()];  
        $this->vistaDashboarAdmin('user/buscar',$data);   
    }
    

    //vista editar usuarios
    public function editUser($id_user = null)
    {   
        $userModel = new UserModel();
        $data['datos'] = $userModel->where('id_user', $id_user)->first();
        $this->vistaDashboarAdmin('user/editUser',$data);   
       
        

    }
    


    //update usuarios
    public function update()
    {
       
        $userModel = new UserModel();
        $id_user = $this->request->getVar('id_user');
        $data=$this->datosUsuario();
        $respuesta = $userModel->update($id_user, $data);

        if ($respuesta >0) {
            return redirect()->to(site_url('').'listar')->with('mensaje','exitoUpdate');
        }else{
            return redirect()->to(site_url('').'listar')->with('mensaje','errorUpdate');
        }
        return $this->response->redirect(site_url('/users-list'));
    }
    


    //eliminar usuario
    public function delete_user($id_user)
    {
        $userModel = new UserModel();
		$data = ["id_user" => $id_user];
		
        $respuesta = $userModel->delete($data);
         
        if ($respuesta) {
            return redirect()->to(site_url('').'listar')->with('mensaje','exitoEliminar');
        }else{
            return redirect()->to(site_url('').'listar')->with('mensaje','errorEliminar');
        }

    }


    //vistas dashboardadministrador
    private function vistaDashboarAdmin($view,$data){
        echo view("admin/template/header");
        echo view("admin/$view",$data);
        echo view("admin/template/footer");
    }
}