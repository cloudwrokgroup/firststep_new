<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profit_model extends CI_Model {
 
    public function check_profit($profit){
         $condition = "profit =" . "'" . $profit . "' AND " . "isActive ='Active'";
         $this->db->select('*');
         $this->db->from('profit');
         $this->db->where($condition);
         $this->db->limit(1);
         $query = $this->db->get();
         if ($query->num_rows() == 1) {
                return false;
         } else {
            return true;
        }
    }
    
   public function getProfits(){
       $query=$this->db->get('profit');
       return $query->result();
   }
   
   public function add_new_profit($profit){
        $data=array(
            'profit'=>$profit,
            );
        return $this->db->insert('profit',$data);
    }
}
