<?php
class LoginUser extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Login_model');
    }


	public function index(){
		$this->load->library('session');
		if ($this->session->userdata('login')) {
			redirect('accueil');
		}else{
			$this->load->view('login');
		}
	}
	public function inscrit(){
		$this->load->view('inscription');
	}

	public function log(){
		$this->load->library('session');

		$matricule=$_POST['matri'];
		$code=$_POST['codeAcce'];
		$donnee=$this->Login_model->login($matricule, $code);

        $select="SELECT * from utilisateurs where codeAccess='$code'";
        $aff=$this->db->query($select);
        $aff->row();
        $nom="";
        $prenom="";
        $poste="";
        $date="";
        foreach ($aff->result() as $value) {
        	$nom=$value->nom;
        	$prenom=$value->prenoms;
        	$poste=$value->poste;
       		$date=$value->dateEmbauche;
        }
        //admin
        $type="";
        $verify="SELECT typeuser from utilisateurs where matricule='$matricule'";
        $typeuse=$this->db->query($verify);
        $typeuse->row();
	    foreach ($typeuse->result() as $val) {
	        	$type=$val->typeuser;
	     }
   //verifier si deja connecte
        $i="";
        $ver="SELECT mat from actif where mat='$matricule'";
        $im=$this->db->query($ver);
        $im->row();
	    foreach ($im->result() as $v) {
	        	$i=$v->mat;
	     }
	     if ($type=="Admin" && $donnee) {
	     	$this->session->set_userdata('login', $donnee);
            $insert="INSERT INTO actif(mat, code,name,lastname,emploi, embauchedate) VALUES($matricule, $code, '$nom', '$prenom','$poste','$date')";
            $ajout=$this->db->query($insert);

			redirect('admin');
	     }else if ($i==$matricule) {
	     	header('location:'.base_url().$this->index());
			$this->session->set_flashdata('errorIm', 'Matricule déjà connecté');
	     }else if ($donnee) {
			$this->session->set_userdata('login', $donnee);

            $insert="INSERT INTO actif(mat, code,name,lastname,emploi, embauchedate) VALUES($matricule, $code, '$nom', '$prenom','$poste','$date')";
            $ajout=$this->db->query($insert);

			redirect('accueil');
		}
		else if($matricule=="" || $code==""){
			header('location:'.base_url().$this->index());
			$this->session->set_flashdata('errorVide', 'Remplissez-vous le champ s\'il vous plait!');
		}else{
			header('location:'.base_url().$this->index());
			$this->session->set_flashdata('errors', 'Matricule ou code d\'accès invalide');
		}
	}

	public function accueil(){
		$this->load->library('session');

		if ($this->session->userdata('login')) {
			$this->load->view('accueil');
		}else{
			redirect('login');
		}
	}
	public function admin(){
		$this->load->library('session');

		if ($this->session->userdata('login')) {
			$this->load->view('admin');
		}else{
			redirect('login');
		}
	}
	public function deconnexion(){
		$this->load->library('session');
		$utilisateurs=$this->session->userdata('login');
        echo json_encode($utilisateurs);

        $im="";
        foreach ($utilisateurs as $key=>$value) {
        	$im=$value;
        }

        $sup="DELETE FROM actif where code='$im'";
        $effacer=$this->db->query($sup);
		$this->session->unset_userdata('login');

		redirect('login');
	}
}
?>