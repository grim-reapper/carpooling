<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle_model extends CI_Model {

    public function getAllVehicleMake(){
        $query = $this->db->query("SELECT DISTINCT make FROM vehicle_model");
        if($query->num_rows() > 0 ){
            return $query->result_array();
        }
        return array();
    }

    public function getVehicleModel($make)
    {
    	if(empty($make)){
    		return false;
    	}

    	$query = $this->db->query("SELECT model FROM vehicle_model WHERE make = '$make'");
        if($query->num_rows() > 0 ){
            return $query->result_array();
        }
        return array();
    }

}