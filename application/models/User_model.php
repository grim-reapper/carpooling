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

}