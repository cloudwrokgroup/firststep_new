<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country_model extends CI_Model {
 
    public function add_country($country){
         $condition = "countryname =" . "'" . $country . "' AND " . "isActive ='Active'";
         $this->db->select('*');
         $this->db->from('country');
         $this->db->where($condition);
         $this->db->limit(1);
         $query = $this->db->get();
         if ($query->num_rows() == 1) {
                return true;
         } else {
            return false;
        }
    }
    
   public function get_Countrys(){
       $query=$this->db->get('country');
       return $query->result();
   }
   
   public function add_new_country($country){
        $data=array(
            'countryname'=>$country,
            );
        return $this->db->insert('country',$data);
    }
    
  
 
}
