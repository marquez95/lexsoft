<?php 
namespace App\Controllers\cliente;
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\PaisModel;

class UserCliente extends Controller{

    
    
    //index
    public function new_user()
    {   
        
        $this->vistaDashboarCliente('usuarioCliente/newCliente',[]);   
    }

    //datos de usuario
    public function datosUsuario(){
        helper('user');
        $data = [
            'id_creado'         =>$this->request->getVar('id_creado'),
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
            return redirect()->to(site_url('').'listarCliente')->with('mensaje','exitoAgregar');
        }else{
            return redirect()->to(site_url('').'listarCliente')->with('mensaje','errorAgregar');
        }
       
    }  


    //listar usuarios
    public function listar_Cliente(){
        $userModel = new UserModel();
        $mensaje = session('mensaje');
        $id_user = session('id_user');
        $data = [
            'datos' => $userModel->asObject()->where('id_creado ='. $id_user)->get(),
            'mensaje' =>$mensaje];
        
        $this->vistaDashboarCliente('usuarioCliente/listarCliente',$data);

    }


    //buscar usuarios
    public function buscar_cliente(){
        $id_user = session('id_user');
        $userModel = new UserModel();
		$data = ['datos' => $userModel->asObject()->where('id_creado ='. $id_user)->get()];  
        $this->vistaDashboarCliente('usuarioCliente/buscarCliente',$data);   
    }
    

    //vista editar usuarios
    public function edit_cliente($id_user=null)
    {   
        
        $userModel = new UserModel();
        $data['datos'] = $userModel->find($id_user);
        $this->vistaDashboarCliente('usuarioCliente/editCliente',$data);
       
        

    }
    


    //update usuarios
    public function update($id_user= null)
    {
       
        $userModel = new UserModel();
       
        $data=$this->datosUsuario();
        $respuesta = $userModel->update($id_user, $data);

        if ($respuesta >0) {
            return redirect()->to(site_url('').'listarCliente')->with('mensaje','exitoUpdate');
        }else{
            return redirect()->to(site_url('').'listarCliente')->with('mensaje','errorUpdate');
        }
        return $this->response->redirect(site_url('/listarCliente'));
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
    private function vistaDashboarCliente($view,$data){
        echo view("cliente/template/headerCliente");
        echo view("cliente/$view",$data);
        echo view("cliente/template/footerCliente");
    }
}