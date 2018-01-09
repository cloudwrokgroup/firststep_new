<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();
class Profits extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Profit_model');
    }

    //default index page
	public function index(){
		$this->load->view('profits');
	}
	
	//for adding department to db
    public function master_add_profits(){
        $profits=$_POST['profits'];
	    $result=$this->Profit_model->add_new_profit($profits);
	    $this->output
	               ->set_content_type('application/json')
	               ->set_output(json_encode(array(
	                   "status"=>"success",
	                   "message"=>"Profit added successfully!.."
	               )));
    }
   
    //for getting profit list
    public function getProfits_list(){
        $profits=new Profit_model;
	    $data['data']=$profits->getProfits();
        $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data));
        
    }
    //for check profit duplicate with  db
    public function master_check_profit(){
          $profits=$_GET['profits'];
          $result=$this->Profit_model->check_profit($profits);
          $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($result));
    }
	
}
