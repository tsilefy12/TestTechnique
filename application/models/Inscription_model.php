<?php 

class Inscription_model extends CI_Model{
  public function ajoutUlisateur($data) {
        $this->db->insert('utilisateurs', $data);
    }
}