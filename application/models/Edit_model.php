<?php 

class Edit_model extends CI_Model{
	  public function updateEmploye($data) {
        $this->db->update('employes', $data);
    }
    public function geteditemploye($matricule){
    	$select=$this->db->get('employes');
    	return $select;
    }
}