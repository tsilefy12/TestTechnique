<?php
  class Inscription extends CI_Controller {
  	public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Inscription_model');
        $this->load->model('Employe_model');
    }
  	public function index(){
  		$this->load->views('inscription');
  	}
  	public function inscriptionEmployes(){
        $this->form_validation->set_rules('matricule', 'Matricule', 'required');
        $this->form_validation->set_rules('nom', 'Nom', 'required');
        $this->form_validation->set_rules('prenoms', 'Prénoms', 'required');
        $this->form_validation->set_rules('dateEmbauche', 'Date d\'embauche', 'required');
        $this->form_validation->set_rules('poste', 'Poste ou emploi', 'required');
        $this->form_validation->set_rules('email', 'adresse mail incorrecte', 'required');
        $this->form_validation->set_rules('typeuser', 'Type user', 'required');

 
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Tous les chmps sont obligatoires');
             $this->load->view('inscription');
        }else{
      
            $data = array(
                'matricule' => $this->input->post('matricule'),
                'nom' => $this->input->post('nom'),
                'prenoms' => $this->input->post('prenoms'),
                'dateEmbauche' => $this->input->post('dateEmbauche'),
                'poste' => $this->input->post('poste'),
                'email' => $this->input->post('email'), 
                'typeuser' => $this->input->post('typeuser'),                 
                'codeAccess' => $this->generate_code_acces()
            );
                $mat=$this->input->post('matricule');
                $im="";
                $verify="SELECT matricule from utilisateurs where matricule='$mat'";
                $matri=$this->db->query($verify);
                $matri->row();
                foreach ($matri->result() as $val) {
                        $im=$val->matricule;
                 }
                 if ($im==$mat) {
                    $this->session->set_flashdata('erreur', 'Matricule existe');
                    redirect('inscription');
                 }else{
                    $this->Inscription_model->ajoutUlisateur($data);
                    $this->session->set_flashdata('success', 'ajout avec succès');
                    $this->load->view('inscription');
                 }
              
        }
  	}
    public function ajoutUtilis(){
        $this->form_validation->set_rules('matricule', 'Matricule', 'required');
        $this->form_validation->set_rules('nom', 'Nom', 'required');
        $this->form_validation->set_rules('prenoms', 'Prénoms', 'required');
        $this->form_validation->set_rules('dateEmbauche', 'Date d\'embauche', 'required');
        $this->form_validation->set_rules('poste', 'Poste ou emploi', 'required');
        $this->form_validation->set_rules('email', 'adresse mail incorrecte', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Tous les chmps sont obligatoires');
            redirect('admin');
        }else{

            $data = array(
                'matr' => $this->input->post('matricule'),
                'nomEmploye' => $this->input->post('nom'),
                'prenomEmploye' => $this->input->post('prenoms'),
                'dateEmbch' => $this->input->post('dateEmbauche'),
                'posteEpmloye' => $this->input->post('poste'),
                'mail' => $this->input->post('email'),
                'codeAcces' => $this->generate_code_acces()
            );
                $mat=$this->input->post('matricule');
                $im="";
                $verify="SELECT matricule from utilisateurs where matricule='$mat'";
                $matri=$this->db->query($verify);
                $matri->row();
                foreach ($matri->result() as $val) {
                        $im=$val->matricule;
                 }
                 if ($im==$ma) {
                    $this->session->set_flashdata('erreure', 'Matricule existe');
                    redirect('admin');
                 }
                 else{
                    $this->Employe_model->ajoutEmployes($data);
                    $this->session->set_flashdata('success', 'ajout avec succès');
                    redirect('admin');
                 }
        }
    }
  	  private function generate_code_acces() {
        return rand(100000, 999999);
    }
    function delete($matricule){
        $this->db->where('matr', $matricule);
        $this->db->delete('employes');
        redirect('admin');
    }
  }
?>