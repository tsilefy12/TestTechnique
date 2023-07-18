<?php 
class Actif extends CI_Controller
{
	
	function __construct()
	{
	  	parent::__construct();
        $this->load->helper('url');
        $this->load->model('Actif_model');
	}

	public function index(){
		$this->load->database();  
	    $data['actifs'] = $this->Actif_model->actif();
		$this->load->view('actif',$data);
	}
}