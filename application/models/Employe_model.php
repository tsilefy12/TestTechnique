<?php 

class Employe_model extends CI_Model{
  public function ajoutEmployes($data) {
        $this->db->insert('employes', $data);
    }
    public function getEmploye(){
    	$select=$this->db->get('employes');
    	return $select;
    }
}