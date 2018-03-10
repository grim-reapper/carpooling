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
		$data['photo'] = $this->user_model->getUserPhoto($this->user_id);
		$this->template->write_view('content','user/photo',$data);
		$this->template->render();	
	}

	public function saveUserPhoto(){
		$filename= $_FILES["file"]["name"];
		$file_ext = pathinfo($filename,PATHINFO_EXTENSION);
		  $new_name = time().rand(0,99).'.'.$file_ext;
		  $config['upload_path']   = './uploads/'; 
	      $config['allowed_types'] = 'gif|jpg|png'; 
	      $config['file_name'] = $new_name;
	      $config['max_size']      = 1024;
	      $this->load->library('upload', $config);

	      if ( ! $this->upload->do_upload('file')) {
	         $error = array('error' => $this->upload->display_errors()); 
	         $this->template->write_view('content','user/photo',$error);
			 $this->template->render();
	      }else { 
	        $uploadedImage = $this->upload->data();
	        $this->resize_image($uploadedImage['file_name']);
	        $this->db->set('pic',$new_name);
	        $this->db->where('id',$this->user_id);
	        if($this->db->update('users')){
	        	$this->session->set_flashdata('success','Your photo send for approval');
	    	}else{
	    		$this->session->set_flashdata('error','We are unable to upload your photo, please try again later.');
	    	}
	        redirect('dashboard/photo');
	      } 
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


	public function showPasswordForm()
	{
		$this->template->write_view('content','user/password_reset');
		$this->template->render();		
	}

	public function updateUserPassword()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('curr_password','Current password','required');
		$this->form_validation->set_rules('new_password','New password','required');
		$this->form_validation->set_rules('conf_password','Confirm password','required');
		if ($this->form_validation->run() == FALSE){
            $errors = validation_errors('<li>', '</li>');
            $validationErrors = ['status' => 'error','message' => "<div class=\"error\"><ul> $errors </ul></div>"];
            echo json_encode($validationErrors);
        }else {

            $curr_password = $this->input->post('curr_password',true);
            $new_password = $this->input->post('new_password',true);

            if(!$this->auth->edit_password($this->user_id,$curr_password,$new_password)){
            	echo json_encode(['status' => 'error','message' => 'Current password is not correct']);exit;
            }else {
            	echo json_encode(['status' => 'success','message' => 'Your password updated.']);exit;
            }
        }
	}


	public function resize_image($filename){
		$source_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $filename;
      $target_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/thumbnail/';
      $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          'create_thumb' => TRUE,
          'thumb_marker' => '',
          'width' => 150,
          'height' => 150
      );


      $this->load->library('image_lib', $config_manip);
      if (!$this->image_lib->resize()) {
          echo $this->image_lib->display_errors();
      }


      $this->image_lib->clear();
   }

   public function facbeookLogout()
	{
		$this->load->library('facebook');
		$data['logoutUrl'] = $this->facebook->logout_url();
	}
	
}