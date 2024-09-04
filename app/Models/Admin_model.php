<?php 

namespace App\Models;
use CodeIgniter\Model;

class Admin_model extends Model
{
    protected $table = "admin";

    
    public function getadmin($id = null)
    {
        return $this->db->table($this->table)->get()->getResultArray();
       
    //    return $this->findAll();
 
    }

    public function saveProduct($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateProduct($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('product_id' => $id));
        return $query;
    }

    public function admindel($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    } 
}
