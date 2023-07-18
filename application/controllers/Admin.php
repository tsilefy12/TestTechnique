<?php 
class Admin extends CI_Controller
{
	
	function __construct()
	{
	  	parent::__construct();
        $this->load->helper('url');
        $this->load->model('Employe_model');
	}

	public function index(){
		$this->load->database();  
	    $data['h'] = $this->Employe_model->getEmploye();
	    $this->load->view('admin', $data);
	}
}