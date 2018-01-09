<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department_model extends CI_Model {
 
    public function check_department($department){
         $condition = "department =" . "'" . $department . "' AND " . "isActive ='Active'";
         $this->db->select('*');
         $this->db->from('department');
         $this->db->where($condition);
         $this->db->limit(1);
         $query = $this->db->get();
         if ($query->num_rows() == 1) {
                return false;
         } else {
            return true;
        }
    }
    
   public function getDepartments(){
       $query=$this->db->get('department');
       return $query->result();
   }
   
   public function add_new_department($department){
        $data=array(
            'department'=>$department,
            'isActive'=> 'Active'
            );
        return $this->db->insert('department',$data);
    }
}
