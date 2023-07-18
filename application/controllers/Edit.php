<?php 
class Edit extends CI_Controller
{
	
	function __construct()
	{
	  	parent::__construct();
        $this->load->helper('url');
        $this->load->model('Edit_model');
	}

	public function edit($matricule){
		$this->load->database();  
	    $data['e'] = $this->Edit_model->geteditemploye($matricule);
        $this->load->view('editer', $data);
	    
	}
	function modifier(){
		$this->form_validation->set_rules('matricule', 'Matricule', 'required');
        $this->form_validation->set_rules('nom', 'Nom', 'required');
        $this->form_validation->set_rules('prenoms', 'Prénoms', 'required');
        $this->form_validation->set_rules('dateEmbauche', 'Date d\'embauche', 'required');
        $this->form_validation->set_rules('poste', 'Poste ou emploi', 'required');
        $this->form_validation->set_rules('email', 'adresse mail incorrecte', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Tous les chmps sont obligatoires');
             $this->load->view('editer');
        }else{

            $data = array(
                'matr' => $this->input->post('matricule'),
                'nomEmploye' => $this->input->post('nom'),
                'prenomEmploye' => $this->input->post('prenoms'),
                'dateEmbch' => $this->input->post('dateEmbauche'),
                'posteEpmloye' => $this->input->post('poste'),
                'mail' => $this->input->post('email'),
            );

            $this->Edit_model->updateEmploye($data);
            $this->session->set_flashdata('successe', 'modification succès');
            redirect('admin');
        }
	}
}