<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {
 
   public function check_category($category){
         $condition = "category =" . "'" . $category . "' AND " . "isActive ='Active'";
         $this->db->select('*');
         $this->db->from('category');
         $this->db->where($condition);
         $this->db->limit(1);
         $query = $this->db->get();
         if ($query->num_rows() == 1) {
                return false;
         } else {
            return true;
        }
    }
    
   public function getCategorys(){
       $query=$this->db->get('category');
       return $query->result();
   }
   
   public function add_new_category($cat,$photo_name){
       
        $target = './images/';
        $temp = explode(".", $_FILES["photo"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        $target = $target . $newfilename;
        if(($_FILES['photo']['type']=='image/jpg') || 
           ($_FILES['photo']['type']=='image/jpeg') || 
           ($_FILES['photo']['type']=='image/png') || 
           ($_FILES['photo']['type']=='image/gif')){
                if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) 
                {
                   $i = 1;
                } 
            }
        $data=array(
            'category'=>$cat,
            'photo_name'=>$newfilename
            );
        return $this->db->insert('category',$data);
    }
    
  
 
}
