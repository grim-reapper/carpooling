<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RidesController extends CI_Controller {
	protected $user_id;
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('vehicle_model');
		$this->load->model('city_model');
		if(!$this->session->userdata('logged_in')) {
			redirect('login');
		}
		$this->user_id = $this->session->userdata('id');
	}

	public function index()
	{

		$this->template->write_view('content','rides/active');
		$this->template->render();
	}

	public function offerSeats()
	{
		// print_r($this->input->post());die;
		$this->template->write_view('content','rides/offer_seats');
		$this->template->render();
	}
	
}