<?php 
namespace App\Controllers\cliente;
use App\Models\PlantillaModal;
use CodeIgniter\Controller;

class Plantilla extends Controller{
    public function index()
    {
        $this->vistaDashboarPlantilla([],'plantilla/nuevaPlantilla');
    }

    public function datosPlantilla(){
        
        
        $data = [
            'id_creado'         =>$this->request->getVar('id_creado'),
            'nombre_plantilla'  =>$this->request->getVar('nombre_plantilla'),
            'plantilla'         =>$this->request->getVar('plantilla')
            
            
        ];
        return $data;
    }

    public function insert_plantilla()
    {   
        
        $plantillaModal = new PlantillaModal();
        $datos=$this->datosPlantilla();
        
        $respuesta = $plantillaModal->insert($datos);
        if ($respuesta >0) {
            return redirect()->to(site_url('').'inicio')->with('mensaje','exitoAgregarPlantilla');
        }else{
            return redirect()->to(site_url('').'inicio')->with('mensaje','errorAgregarPlantilla');
        }
       
    } 

    

    private function vistaDashboarPlantilla($data,$view){
        
        
        echo view("cliente/template/headerCliente");
        echo view("cliente/$view",$data);
        echo view("cliente/template/footerCliente");
    }
}