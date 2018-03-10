<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function getUserDetail($email){
        $query = $this->db->select('id,first_name,last_name,email,pic')->get_where('users',['email' => $email]);
        if($query->num_rows() > 0 ){
            return $query->row_array();
        }
        return array();
    }

    public function getPersonalInfo($user_id){
    	if(empty($user_id)){
    		return false;
    	}

    	$query = $this->db->select('first_name,last_name,email,contact_number,dob,gender,about')->get_where('users',array('id' => $user_id));

    	if($query->num_rows() > 0 ){
            return $query->row_array();
        } 
        return array();
    }

    public function getUserPreference($user_id){
    	if(empty($user_id)){
    		return false;
    	}

    	$this->db->select('*');
		$this->db->from('user_preferences');
		$this->db->join('users', 'users.id = user_preferences.user_id');
		$query = $this->db->get();

    	if($query->num_rows() > 0 ){
            return $query->row_array();
        } 
        return array();
    }

    public function getUserPhoto($user_id){
        if(empty($user_id)){
            return false;
        }

        $query = $this->db->select('pic')->get_where('users',['id' => $user_id,'pic_verified' => 'y']);

        if($query->num_rows() > 0 ){
            $data = $query->row_array();
            return $data['pic'];
        } 
        return '';
    }

    public function checkUser($userdata)
    {
		if(empty($userdata)){
            return false;
        }

        $query = $this->db->select('*')->get_where('users',['email' => $userdata['email']]);
	        if($query->num_rows() > 0 ){
	        	$data = $query->row_array();
	        	$user_id = $data['id'];
	            $this->db->where('id',$user_id);
	            $this->db->update('users',$userdata);
	            return $user_id;
	        } else {
	        	$this->db->insert('users',$userdata);
	        	return $this->db->insert_id();
	        }
   }

}