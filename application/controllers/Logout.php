<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->fblogout();
		$this->auth->logout();
		redirect('login');
	}
	public function fblogout() {
		$this->load->library('facebook');
        // Remove local Facebook session
        $this->facebook->destroy_session();
    }
	
}