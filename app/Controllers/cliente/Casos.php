<?php 
namespace App\Controllers\cliente;

use CodeIgniter\Controller;
use App\Models\ClienteModel;
use App\Models\PlantillaModal;
use App\Models\CasosModal;

class Casos extends Controller{
    
    public function nuevo_caso(){
        $userModel = new ClienteModel();
        $plantillaModal = new PlantillaModal();
        $mensaje = session('mensaje');
        $id_user = session('id_user');
        $data = [
            'datos' => $userModel->asObject()->where('id_creado ='. $id_user)->get(),
            'plantilla' => $plantillaModal->asObject()->where('id_creado ='. $id_user)->get(),
            'mensaje' =>$mensaje];
        
        $this->vistaDashboarCliente('casos/nuevoCaso',$data);
    }

    private function vistaDashboarCliente($view,$data){
        echo view("cliente/template/headerCliente");
        echo view("cliente/$view",$data);
        echo view("cliente/template/footerCliente");
    }

    //auto complementer con dui

    public function buscarNombre(){
        $clienteModel = new ClienteModel();
        $dui = $_POST['dui'];
        $data = [
            'datos' => $clienteModel->where('dui', $this->request->getVar('dui'))->findAll()
        ];
        print_r(json_encode($data));

    }

    public function buscarPlantilla(){
        $plantillaModel = new PlantillaModal();
        $nombre_plantilla = $_POST['nombre_plantilla'];
        $datados = [
            'datosdos' => $plantillaModel->where('nombre_plantilla', $this->request->getVar('nombre_plantilla'))->findAll()
        ];
        print_r(json_encode($datados));

    }

    public function datosCasos(){
        
        
        $data = [
            'id_cliente'         =>$this->request->getVar('id_cliente'),
            'id_consultante'  =>$this->request->getVar('id_consultante'),
            'nombre'         =>$this->request->getVar('nombre'),
            'doc_caso'         =>$this->request->getVar('doc_caso'),
            'estado'         =>$this->request->getVar('estado')
            
            
        ];
        return $data;
    }


    public function insert_caso()
    {   
        
        $casosModal = new CasosModal();
        $datos=$this->datosCasos();
        
        $respuesta = $casosModal->insert($datos);
        
        if ($respuesta >0) {
            return redirect()->to(site_url('').'inicio')->with('mensaje','exitoAgregarCaso');
        }else{
            return redirect()->to(site_url('').'inicio')->with('mensaje','errorAgregarCaso');
        }
       
    } 

}