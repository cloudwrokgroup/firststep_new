<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();
class Category extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Category_model');
    }

	public function index(){
		$this->load->view('category');
	}
    
    public function master_add_category(){
        $cat=$_POST['category_name'];
        $photo_name=$_FILES['photo']['name'];
	    $result=$this->Category_model->add_new_category($cat,$photo_name);
	    if($result==true){
    	    $this->output
    	               ->set_content_type('application/json')
    	               ->set_output(json_encode(array(
    	                   "status"=>"success",
    	                   "message"=>"Category added successfully!.."
    	               )));
	    }else{
	        $this->output
    	               ->set_content_type('application/json')
    	               ->set_output(json_encode(array(
    	                   "status"=>"failure",
    	                   "message"=>"Unable to add Category Please try again"
    	               )));
	    }
    }
	
}
