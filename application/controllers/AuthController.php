<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		if($this->session->userdata('logged_in')) {
			redirect('dashboard');
		}
	}
	public function showLoginForm()
	{
		$this->template->write_view('content','user/login');
		$this->template->render();
	}

	public function doLogin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run() == FALSE){
			$errors = validation_errors('<li>', '</li>');
            $validationErrors = ['status' => 'error','message' => "<div class=\"error\"><ul> $errors </ul></div>"];
            echo json_encode($validationErrors);
		}else{
			$email = $this->input->post('email',TRUE);
			$password = $this->input->post('password', TRUE);
	    	if($this->auth->login($email,$password)){
	    		echo json_encode(array('status' => 'success','message' => 'Logged in successfully'));
	    	}else{
	    		echo json_encode(array('status' => 'error','message' => 'Invalid email/password combination.'));
	    	}
		}
	
	}
	public function registerUser()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('firstname','First name','required');
		$this->form_validation->set_rules('lastname','Last name','required');
		$this->form_validation->set_rules('contact_number','Phone number','required');
		$this->form_validation->set_rules('dob','Date of birth','required');
		$this->form_validation->set_rules('cnic','CNIC','required');
		$this->form_validation->set_rules('dln','Driving license','required');
		$this->form_validation->set_rules('gender','Gender','required');
		if($this->form_validation->run() == FALSE){
			 $errors = validation_errors('<li>', '</li>');
            $validationErrors = ['status' => 'error','message' => "<div class=\"error\"><ul> $errors </ul></div>"];
            echo json_encode($validationErrors);
		}else{
			$data['email'] = $this->input->post('email',TRUE);
			$data['password'] = $this->input->post('password', TRUE);
			$data['first_name'] = $this->input->post('password', TRUE);
			$data['last_name'] = $this->input->post('password', TRUE);
			$data['contact_number'] = $this->input->post('password', TRUE);
			$data['dob'] = $this->input->post('password', TRUE);
			$data['cnic'] = $this->input->post('password', TRUE);
			$data['gender'] = $this->input->post('password', TRUE);
			$data['driving_license'] = $this->input->post('password', TRUE);
	    	if($this->auth->create($data,true)){
	    		echo json_encode(array('status' => 'success','message' => 'Your account is created.'));
	    	}else{
	    		echo json_encode(array('status' => 'error','message' => 'User already register with same email please try a different one.'));
	    	}
		}
	}

	public function loginWithFacebook()
	{
		// echo 'herere';die;
		$this->load->library('facebook');

		$userData = array();

        // Check if user is logged in
        if($this->facebook->is_authenticated()){
            // Get user facebook profile details
            $userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,birthday,picture');
            $birthday_formate = strtotime(date($userProfile['birthday']));
            $new_birthday_formate = date('Y-m-d',$birthday_formate);
            // Preparing data for database insertion
            $userData['provider'] = 'facebook';
            $userData['provider_id'] = $userProfile['id'];
            $userData['first_name'] = $userProfile['first_name'];
            $userData['last_name'] = $userProfile['last_name'];
            $userData['email'] = $userProfile['email'];
            $userData['gender'] = $userProfile['gender'];
            $userData['dob'] = $new_birthday_formate;
            $userData['is_active'] = 'y';
            $userData['is_email_verified'] = 'y';
            $userData['pic_verified'] = 'y';
            // $userData['profile_url'] = 'https://www.facebook.com/'.$userProfile['id'];
            $userData['pic'] = $userProfile['picture']['data']['url'];
            $userdata['created_at'] = date('Y-m-d H:i:s');
	        $userdata['updated_at'] = date('Y-m-d H:i:s');

            // Insert or update user data
            $userID = $this->user_model->checkUser($userData);

            // Check user data insert or update status
            if(!empty($userID)){
                $data['userData'] = $userData;
                $this->session->set_userdata('logged_in', true);
                $this->session->set_userdata('id', $userID);
                $this->session->set_userdata($userData);

                redirect("dashboard");
            }else{
               $data['userData'] = array();
               redirect('login');
            }
        }else{
            redirect('login');
        }

        
	}
	
	public function facebookRedirect()
	{
		$this->load->library('facebook');
		$fb_redirect_url = $this->facebook->login_url();
		redirect($fb_redirect_url);
	}
}