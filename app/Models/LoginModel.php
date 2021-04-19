<?php 
namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model{
    protected $table      = 'lexsoft_tb_users';
    protected $primaryKey = 'id_user';
   
    public function obtenerUsuario($data) {
        $Usuario = $this->db->table('lexsoft_tb_users');
        $Usuario->where($data);
        return $Usuario->get()->getResultArray();
    }

  
    
}