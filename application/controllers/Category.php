<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();
class Category extends CI_Controller {

    public function __construct() {
        parent::__construct();
       // $this->load->helper('form');
        //$this->load->library('form_validation');
        //$this->load->model('Loginprocess_model');
    }

	public function index(){
		$this->load->view('category');
	}
    
    public function category_details(){
        
    }
	
}
