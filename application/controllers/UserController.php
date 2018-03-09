<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {
	protected $user_id;
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		if(!$this->session->userdata('logged_in')) {
			redirect('login');
		}
		$this->user_id = $this->session->userdata('id');
	}

	public function index()
	{
		$this->template->write_view('content','user/dashboard');
		$this->template->render();
	}

	public function showPersonalInfoForm(){
		$data['personal_info'] = $this->user_model->getPersonalInfo($this->user_id);
		$this->template->write_view('content','user/personal_info',$data);
		$this->template->render();	
	}

	public function savePersonalInfo(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name','First name','required|alpha_numeric_spaces');
		$this->form_validation->set_rules('last_name','Last name','required|alpha_numeric_spaces');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('contact_number','Phone number','required|numeric');
		$this->form_validation->set_rules('dob','Date of birth','required');
		$this->form_validation->set_rules('bio','Bio','required');
		if ($this->form_validation->run() == FALSE){
            $errors = validation_errors('<li>', '</li>');
            $validationErrors = ['status' => 'error','message' => "<div class=\"error\"><ul> $errors </ul></div>"];
            echo json_encode($validationErrors);
        }else {

        	$data['first_name'] = $this->input->post('first_name',true);
            $data['last_name'] = $this->input->post('last_name',true);
            $data['gender'] = $this->input->post('gender',true);
            $data['contact_number'] = $this->input->post('contact_number',true);
            $data['dob'] = $this->input->post('dob',true);
            $data['about'] = $this->input->post('bio',true);
            $data['updated_at'] = date('Y-m-d H:i:s');

            $this->db->where('id', $this->user_id);
            if(!$this->db->update('users', $data)){
                echo json_encode(['status' => 'error','message' => 'Something went wrong please try again later']);exit;
            }else {
                echo json_encode(['status' => 'success','message' => 'Your profile changes have been saved.']);exit;   
            }
        }
	}

	public function showPhotoForm(){
		$this->template->write_view('content','user/photo');
		$this->template->render();	
	}

	public function showPreferencesForm(){
		$data['preference'] = $this->user_model->getUserPreference($this->user_id);
		$this->template->write_view('content','user/preference',$data);
		$this->template->render();	
	}

	public function savePreferences(){
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('chattiness','Chit Chat','required');
		$this->form_validation->set_rules('smoking','Smoking','required');
		$this->form_validation->set_rules('pets','Pet','required');
		$this->form_validation->set_rules('music','Music','required');
		if ($this->form_validation->run() == FALSE){
            $errors = validation_errors('<li>', '</li>');
            $validationErrors = ['status' => 'error','message' => "<div class=\"error\"><ul> $errors </ul></div>"];
            echo json_encode($validationErrors);
        }else {

        	$data['is_chitchat_allowed'] = $this->input->post('chattiness',true);
            $data['is_smoking_allowed'] = $this->input->post('smoking',true);
            $data['is_pet_allowed'] = $this->input->post('pets',true);
            $data['is_music_allowed'] = $this->input->post('music',true);

            $this->db->where('id', $this->user_id);
            if(!$this->db->update('user_preferences', $data)){
                echo json_encode(['status' => 'error','message' => 'Something went wrong please try again later']);exit;
            }else {
                echo json_encode(['status' => 'success','message' => 'Your preference changes have been saved.']);exit;   
            }
        }
	}

	public function showVerificationForm(){
		$this->template->write_view('content','user/verification');
		$this->template->render();	
	}

	public function showCarsForm(){
		$this->template->write_view('content','user/car');
		$this->template->render();	
	}

	public function showPostalAddressForm(){
		$this->template->write_view('content','user/postal_address');
		$this->template->render();	
	}
	
}