<?php 

class Login_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function login($matricule, $code){
		$select=$this->db->get_where('utilisateurs', array('matricule'=>$matricule, 'codeAccess'=>$code));
		return $select->row_array();
	}
}