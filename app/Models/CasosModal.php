<?php 
namespace App\Models;

use CodeIgniter\Model;

class CasosModal extends Model{
    protected $table      = 'lexsoft_tb_casos';
    protected $primaryKey = 'id_caso';
    protected $allowedFields = [
        'id_cliente',//id del abogado
        'id_consultante',//id del cliente del abogado
        'nombre',
        'doc_caso',//la plantilla personalizada
        'estado'

    ];

    
    //listar
    public function get()
    {
        return $this->findAll();
    }
}