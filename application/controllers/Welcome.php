<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function accueil()
	{
		$this->load->model('Cv');
		$data = array();
		$data['diplomes']=$this->Cv->getDiplome();
		$data['filieres']=$this->Cv->getFiliere();
		$data['genres']=$this->Cv->getGenre();
		$data['nationalites']=$this->Cv->getNationalite();
		$data['allAddress']=$this->Cv->getAddress();
		$data['statutMats']=$this->Cv->getStatutMatrimonial();
		$data['contents']='blog-single';
		$this->load->view('template',$data);
	}
	
	public function listeCv()
	{
		$this->load->model('Cv');
		$data = array();
		$data['listes']=$this->Cv->getAllCv();
		$data['contents']='listeCv';
		$this->load->view('template',$data);
	}

	public function ajouterCv(){

		$this->load->model('Cv');
		$nom=$this->input->post('last_name');
		$prenom=$this->input->post('first_name');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$naissance=$this->input->post('naissance');
		$idGenre=$this->input->post('idGenre');
		$idAddresse=$this->input->post('idAddress');

		//tss
		$idNationnalite=$this->input->post('idNationnalite');
		$idDiplome=$this->input->post('idDiplome');
		$idFiliere=$this->input->post('idFiliere');

		$idStatuMatrimoniale=$this->input->post('idStatuMatrimoniale'); 
		$nbrEnfant=$this->input->post('nbrEnfant');
	 	$competence=$this->input->post('competence');
		$casier=$this->input->post('exist');

		// si les valeur ne sont pas inserer ou null redirection
		if($nom == null && $email == null && $phone == null && $naissance == null && $nbrEnfant == null && $idAddresse == null){
			redirect(site_url('Welcome/accueil'));
		}
		// si les valeur sont bien inserer
		else{
			// tony ho transactionnelle
			// insertion personne 
			$this->Cv->addPersonne($nom,$prenom,$email,$phone, $idGenre, $naissance, $idAddresse, $nbrEnfant, $idStatuMatrimoniale, $casier);
			// maka an le personne vao avy inserena
			$idPersonne=$this->Cv->getLastPersonne();
			$this->Cv->addNationalite_personne($idNationnalite,$idPersonne);
			$this->Cv->addDiplome_filiere_personne($idDiplome,$idFiliere,$idPersonne);
		
			
			
			//mila ampina id annonce a la place de 1 azo @ url 
			$idAnnonce=1;
			$this->Cv->addCv($idPersonne,$idAnnonce);
			redirect(site_url('Welcome/listeCv'));
			
		}

	}

	
	public function detailCv(){

		$this->load->model('Cv');
		$id=$_GET['id'];
		$data = array();
		$data['cv']=$this->Cv->getCvById($id);

		$idPersonne=$data['cv']['id_personne'];
		$data['nationalite']=$this->Cv->getNationalite_personneByIdPersonne($idPersonne);
		$data['diplomeFiliere']=$this->Cv->getDiplome_filiere_personneByIdPersonne($idPersonne);
		$data['contents']='detailCv';
		$this->load->view('template',$data);
	}

}
