<?php 
namespace App\Models;

use CodeIgniter\Model;

class PlantillaModal extends Model{
    protected $table      = 'lexsoft_tb_plantillas';
    protected $primaryKey = 'id_plantilla';
    protected $allowedFields = [
        'id_creado',
        'nombre_plantilla',
        'plantilla'

    ];

    
    //listar
    public function get()
    {
        return $this->findAll();
    }
}