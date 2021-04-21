<?php 
namespace App\Controllers\cliente;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\LoginModel;
class Dashboard extends Controller{
    
    public function index()
    {    

        $this->vistaDashboarCliente([],'dashboardCliente');
        
       
    }

    private function vistaDashboarCliente($data,$view){
        
        $loginModel = new LoginModel();
        $id_user = session('id_user');
        $data ['data'] = $loginModel->where('id_creado ='. $id_user)->countAllResults();
        echo view("cliente/template/headerCliente");
        echo view("cliente/$view",$data);
        echo view("cliente/template/footerCliente");
    }

    
}