<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table      = 'lexsoft_tb_users';
    protected $primaryKey = 'id_user';
    protected $allowedFields = [
        'primer_nombre',
        'segundo_nombre',
        'tercer_nombre',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'dui',
        'pais',
        'direccion',
        'departamento',
        'municipio',
        'username',
        'email',
        'password',
        'type'

    ];

    
    //listar
    public function get()
    {
        return $this->findAll();
    }

    

}