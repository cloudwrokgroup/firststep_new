<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginprocess_model extends CI_Model {
 
 private $title;
    public function login($data){
         $condition = "username =" . "'" . $data['user_name'] . "' AND " . "password =" . "'" . $data['user_password'] . "'";
         $this->db->select('*');
         $this->db->from('user_login');
         $this->db->where($condition);
         $this->db->limit(1);
         $query = $this->db->get();
         if ($query->num_rows() == 1) {
                return true;
         } else {
            return false;
        }
    }
    public function read_user_information($username){
        $condition = "username =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
    }
    }
 
}
