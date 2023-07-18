<?php 

class Actif_model extends CI_Model{
    public function actif(){
    	$select=$this->db->get('actif');
    	return $select;
    }
}