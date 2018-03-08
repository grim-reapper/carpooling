<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function getUserDetail($email){
        $query = $this->db->select('id,first_name,last_name,email,pic')->get_where('users',['email' => $email]);
        if($query->num_rows() > 0 ){
            return $query->row_array();
        } else {
            return array('status' => 204,'message' => 'User not found.');
        }
    }

}