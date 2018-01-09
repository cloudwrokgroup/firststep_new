<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle_model extends CI_Model {
 
    public function check_vehicletype($vehicletype){
         $condition = "vehicletype =" . "'" . $vehicletype . "' AND " . "isActive ='Active'";
         $this->db->select('*');
         $this->db->from('vehicle_type');
         $this->db->where($condition);
         $this->db->limit(1);
         $query = $this->db->get();
         if ($query->num_rows() == 1) {
                return false;
         } else {
            return true;
        }
    }
    
   public function getVehicletypes(){
       $query=$this->db->get('vehicle_type');
       return $query->result();
   }
   
   public function add_new_vehicletype($vehicletype){
        $data=array(
            'vehicletype'=>$vehicletype
            );
        return $this->db->insert('vehicle_type',$data);
    }
}
