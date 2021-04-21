<?php 
namespace App\Controllers\cliente;

use CodeIgniter\Controller;
use App\Models\CasosModal;
class Casos extends Controller{
    
    public function nuevo_caso(){
        $this->vistaDashboarCliente('casos/nuevoCaso',[]);   
    }

    private function vistaDashboarCliente($view,$data){
        echo view("cliente/template/headerCliente");
        echo view("cliente/$view",$data);
        echo view("cliente/template/footerCliente");
    }
}