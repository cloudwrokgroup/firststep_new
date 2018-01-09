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
    
    public function getCategory_list(){
        $categorys=new Category_model;
	    $data['data']=$categorys->getCategorys();
        $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data));
        
    }
    
    public function master_check_category(){
          $category_name=$_GET['category_name'];
          $result=$this->Category_model->check_category($category_name);
          $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($result));
    }
	
}
