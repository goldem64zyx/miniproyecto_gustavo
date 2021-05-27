<?php 
namespace App\Models;
use CodeIgniter\Model;
class CrudModel extends Model{

    public function listarNombres(){
        $nombres = $this->db->query("SELECT * FROM personas");
        return $nombres->getResult();
    }

    public function insertar($datos){
        $nombres = $this->db->table('personas');
        $nombres->insert($datos);

        return $this->db->insertID();

    }

    public function obtenerNombre($idNombre){
        $Nombres = $this->db->table('personas');
        $Nombres->where($idNombre);
        return $Nombres->get()->getResultArray();

    }

    public function actualizar($data,$idNombre){
        $Nombres = $this->db->table('personas');
        $Nombres->set($data);
        $Nombres->where('id_nombre',$idNombre);
        return $Nombres->update();
    }

}