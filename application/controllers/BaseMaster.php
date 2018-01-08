<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();
class BaseMaster extends CI_Controller {

    public function __construct() {
        parent::__construct();
       // $this->load->helper('form');
        //$this->load->library('form_validation');
        $this->load->model('Country_model');
    }

	public function index(){
	    $country=new Country_model;
	    $data['country']=$country->get_Countrys();
		$this->load->view('countrystatecity',$data);
	
	}
	
	public function master_add_country(){
	     $country=$_POST['country_name'];
	     $result=$this->Country_model->add_new_country($country);
	     $this->output
	               ->set_content_type('application/json')
	               ->set_output(json_encode(array(
	                   "status"=>"success",
	                   "message"=>"Country added successfully!.."
	               )));
	   	}
    
    
    public function getCountry_list(){
         $country=new Country_model;
	     $data['country']=$country->get_Countrys();
        $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data));
    }
    
    public function check_duplicate_country(){
        $country=$_GET['country'];
        $result=$this->Country_model->add_new_country($country);
        if($result==TRUE){
            $this->session->set_flashdata('country', 'This Country Is already Existing');
        }else{
            $this->session->set_flashdata('country', 'not exits');
        }
    }
	
}
