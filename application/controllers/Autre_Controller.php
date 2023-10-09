<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autre_Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct(){
        parent::__construct();
        $this -> load -> model("Annonce_Model");
    }

	// Afficher les détails d'une annonce
    public function detailAnnonce($id_annonce) {
        $data["detailAnnonce"] = $this -> Annonce_Model -> getDetailAnnonce($id_annonce);
        $data["competenceTechnique"] = $this -> Annonce_Model -> getBesoinCompetenceTechniqueOfAnnonce($id_annonce);
        $data["competenceLinguistique"] = $this -> Annonce_Model -> getBesoinCompetenceLinguistiqueOfAnnonce($id_annonce);
        $this->load->view('static/header');
        $this -> load -> view("pages/detailAnnonce", $data);
		$this->load->view('static/footer');
    }

	// Lister des annonces
    public function listeAnnonce() {
		$id_service=$this -> input -> post("id_service");
		$data["allService"]=$this -> Annonce_Model -> getAllService();
		if(!$id_service) {
			$data["allAnnonce"]=$this -> Annonce_Model -> getAllAnnonce();
		} else {
			$data["allAnnonce"]=$this -> Annonce_Model -> findAnnonceByService($id_service);
		}
        $this->load->view('static/header');
        $this -> load -> view('pages/listeAnnonce', $data);
		$this->load->view('static/footer');
    }
    
	public function index()
	{
		$this->load->view('static/header');
		$this->load->view('static/footer');
	}		

	// Login pour responsable de service
	public function formLoginResponsable() {
		if ($this->session->userdata("responsable")) {
            redirect("Responsable_Controller/formAnnonce");
        }
		$this->load->view('pages/Login_Responsable');
	}

	// Login pour RH
	public function formLoginRH() {
		if ($this->session->userdata("rh")) {
            redirect("RH_Controller/formAnnonce");
        }
		$this->load->view('pages/Login_RH');
	}

	// Traitement login responsable
	public function processLoginResponsable() {
		$email=$this -> input -> post("email_responsable");
		$mdp=$this -> input -> post("mdp_responsable");
		$responsable=$this -> Annonce_Model -> getCorrespondingResponsable($email, $mdp);
		if(count($responsable)==0) {
			redirect("Autre_Controller/formLoginResponsable");
		} 
		$this -> session -> set_userdata("responsable", $responsable);
		redirect("Responsable_Controller/formAnnonce");
	}

	// Traitement login rh
	public function processLoginRH() {
		$email=$this -> input -> post("email_rh");
		$mdp=$this -> input -> post("mdp_rh");
		$rh=$this -> Annonce_Model -> getCorrespondingRH($email, $mdp);
		if(count($rh)==0) {
			redirect("Autre_Controller/formLoginRH");
		} 
		$this -> session -> set_userdata("rh", $rh);
		redirect("RH_Controller/formAnnonce");
		// echo $email;
		// echo $mdp;
	}

	// Deconnexion
	public function deconnexion() {
		$this->session->sess_destroy();
		redirect("Autre_Controller/formLoginResponsable");
	}
}
