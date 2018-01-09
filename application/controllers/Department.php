<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();
class Department extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Department_model');
    }

    //default index page
	public function index(){
		$this->load->view('department');
	}
    
    //for adding department to db
    public function master_add_department(){
        $department=$_POST['department_name'];
	    $result=$this->Department_model->add_new_department($department);
	    $this->output
	               ->set_content_type('application/json')
	               ->set_output(json_encode(array(
	                   "status"=>"success",
	                   "message"=>"Department added successfully!.."
	               )));
    }
   
    //for getting department list
    public function getDepartments_list(){
        $department=new Department_model;
	    $data['data']=$department->getDepartments();
        $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data));
        
    }
    //for check department duplicate with  db
    public function master_check_department(){
          $department=$_GET['department_name'];
          $result=$this->Department_model->check_department($department);
          $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($result));
    }
	
}
