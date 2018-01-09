<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
 
    public function check_product($product){
         $condition = "product =" . "'" . $product . "' AND " . "isActive ='Active'";
         $this->db->select('*');
         $this->db->from('product');
         $this->db->where($condition);
         $this->db->limit(1);
         $query = $this->db->get();
         if ($query->num_rows() == 1) {
                return false;
         } else {
            return true;
        }
    }
    
   public function getProduct(){
       $query=$this->db->get('product');
       return $query->result();
   }
   
   public function add_new_product($product,$cat,$photo_name){
        $data=array(
            'productname'=>$product,
            );
        return $this->db->insert('product',$data);
    }
}
