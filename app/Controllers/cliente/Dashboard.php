<?php 
namespace App\Controllers\admin;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\LoginModel;
class Dashboard extends Controller{
    
    public function index()
    {        
        $this->vistaDashboarAdmin([],'dashboard');
        
       
    }

    private function vistaDashboarAdmin($data,$view){
        
        $loginModel = new LoginModel();
        $data ['data'] = $loginModel->countAllResults();
        echo view("admin/template/header");
        echo view("admin/$view",$data);
        echo view("admin/template/footer");
    }

    
}