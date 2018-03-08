<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}
	public function showLoginForm(){
		$this->template->write_view('content','user/login');
		$this->template->render();
	}

	public function doLogin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run() == FALSE){
			echo json_encode(array('status' => 'error','message' => validation_errors()));
		}else{
			$email = $this->input->post('email',TRUE);
			$password = $this->input->post('password', TRUE);
	    	if($this->auth->login($email,$password)){
	    		echo json_encode(array('status' => 'success','message' => 'Logged in successfully'));
	    	}else{
	    		echo json_encode(array('status' => 'error','message' => 'User not Found!'));
	    	}
		}
	
	}

	public function logout()
	{
		
	}
	
}