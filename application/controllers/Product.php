<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();
class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
    }

    //default index page
	public function index(){
		$this->load->view('product');
	}
	
	//for adding product to db
    public function master_add_product(){
        $product=$_POST['product'];
        $cat=$_POST['category'];
        $photo_name=$_FILES['product_file']['name'];
	    $result=$this->Product_model->add_new_product($product,$cat,$photo_name);
	    if($result==true){
    	    $this->output
    	               ->set_content_type('application/json')
    	               ->set_output(json_encode(array(
    	                   "status"=>"success",
    	                   "message"=>"Product added successfully!.."
    	               )));
	    }else{
	        $this->output
    	               ->set_content_type('application/json')
    	               ->set_output(json_encode(array(
    	                   "status"=>"failure",
    	                   "message"=>"Unable to add Product Please try again"
    	               )));
	    }
    }
   
    //for getting product list
    public function getProduct_list(){
        $profits=new Product_model;
	    $data['data']=$profits->getProduct();
        $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data));
        
    }
    //for check product duplicate with  db
    public function master_check_profit(){
          $product=$_GET['product'];
          $result=$this->Product_model->check_product($product);
          $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($result));
    }
	
}
