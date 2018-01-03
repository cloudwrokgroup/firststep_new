<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->view('home');
	}

	public function department(){
		$this->load->view('department');
	}

	public function admin_user_details(){
		$this->load->view('admin_users');
	}

	public function category_details(){
		$this->load->view('category');
	}

	public function transport_details(){
		$this->load->view('transports');
	}

	public function country_state_city_master(){
		$this->load->view('countrystatecity');
	}

	public function profits_master_details(){
		$this->load->view('profits');
	}

	public function vehicle_type_details(){
		$this->load->view('vehicletype');
	}
}
