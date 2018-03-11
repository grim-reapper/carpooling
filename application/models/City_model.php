<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City_model extends CI_Model {

    public function getAllCities(){
        $query = $this->db->query("SELECT id,name FROM cities");
        if($query->num_rows() > 0 ){
            return $query->result_array();
        }
        return array();
    }

}