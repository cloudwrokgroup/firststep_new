<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();
class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        //$this->load->library('form_validation');
        $this->load->model('Loginprocess_model');
    }

	public function index(){
		$this->load->view('login');
	}
	
	public function logout(){
	    $sess_array = array(
                'username' => '',
                'email'=>''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message']="Successfully Logout!...";
       	$this->load->view('login', $data);
	}
	
	public function user_login_process(){
	    $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            if(isset($this->session->userdata['logged_in'])){
                $this->load->view('index');
            }else{
                $data['message']="Invalid username/password!..";
                $this->load->view('login',$data);
            }
        }else{
            $data = array(
                    'user_name' => $this->input->post('username'),
                    'user_password' => $this->input->post('password')
            );
            $result = $this->Loginprocess_model->login($data);
            if ($result == TRUE) {
                $username = $this->input->post('username');
                $result = $this->Loginprocess_model->read_user_information($username);
                if ($result != false) {
                        $session_data = array(
                                        'id' => $result[0]->id,
                                        'username' => $result[0]->username,
                                        'email' => $result[0]->email,
                        );

                        $this->session->set_userdata('logged_in', $session_data);
                        //$this->load->view('home');
                        redirect('home');
                    
                }else{
                    $data['message']="your account has been locked please contact admin";
                    $this->load->view('login',$data);    
                }
            }else{
                $data['message']="Invalid username/password!..";
                $this->load->view('login',$data);
            }
        }
	}
}
