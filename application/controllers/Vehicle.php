<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();
class Vehicle extends CI_Controller {

    public function __construct() {
        parent::__construct();
         $this->load->model('Vehicle_model');
    }

    //default index page
	public function index(){
		$this->load->view('vehicletype');
	}
    
    //for adding vehicletype to db
    public function master_add_vehicletype(){
        $vehicletype=$_POST['vehicle_type'];
	    $result=$this->Vehicle_model->add_new_vehicletype($vehicletype);
	    $this->output
	               ->set_content_type('application/json')
	               ->set_output(json_encode(array(
	                   "status"=>"success",
	                   "message"=>"Vehicle Type added successfully!.."
	               )));
    }
   
    //for getting vehicletype list
    public function getVehicletypes_list(){
        $vehicletypes=new Vehicle_model;
	    $data['data']=$vehicletypes->getVehicletypes();
        $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data));
        
    }
    
    //for check vehicletype duplicate with  db
    public function master_check_vehicletype(){
          $department=$_GET['vehicle_type'];
          $result=$this->Vehicle_model->check_vehicletype($department);
          $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($result));
    }
	
}
