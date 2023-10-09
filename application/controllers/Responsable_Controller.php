<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Responsable_Controller extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    
    // Redirect raha toa ka tsy connecte ilay responsable
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("responsable")) {
            redirect("Autre_Controller/formLoginResponsable");
        }
        $this->load->model("Annonce_Model");
    }

    // Formulaire de nouvelle annoonce
    public function formAnnonce()
    {
        $data["responsable"] = $this->session->userdata("responsable");
        $data["allDiplome"] = $this->Annonce_Model->getAllDiplome();
        $data["allFiliere"] = $this->Annonce_Model->getAllFiliere();
        $data["allJournalier"] = $this->Annonce_Model->getAllJournalier();
        $this->load->view("static/header");
        $this->load->view("pages/nouvelleAnnonceResponsable", $data);
        $this->load->view("static/footer");
    }

    // Insertion de nouvelle annonce am base
    public function newAnnonce() {
        $titre_annonce = $this->input->post("titre_annonce");
        $age_min = $this->input->post("age_min");
        $age_max = $this->input->post("age_max");
        $filiere = $this->input->post("filiere");
        $diplome = $this->input->post("diplome");
        $experience_requis = $this->input->post("experience_requis");
        $distance_maximum = $this->input->post("distance_maximum");
        $duree_contrat = $this->input->post("duree_contrat");
        $salaire_min = $this->input->post("salaire_min");
        $salaire_max = $this->input->post("salaire_max");
        $v_horaire = $this->input->post("v_horaire");
        $journalier = $this->input->post("journalier");
        $v_horaire=$this -> Annonce_Model -> getVolumeHoraireJour($journalier, $v_horaire);
        $date_depot_final = $this->input->post("date_depot_final");
        $description_annonce = $this->input->post("description_annonce");
        $this->Annonce_Model->newAnnonce($this->session->userdata("responsable")["id_service"], $titre_annonce, $diplome, $filiere, $experience_requis, $distance_maximum, $duree_contrat, $salaire_min, $salaire_max, $v_horaire, $date_depot_final, $age_min, $age_max, $description_annonce);
        redirect("Responsable_Controller/formAnnonce");
    }

    // Liste des annonces ou le besoin n'a pas encore ete defini
    public function listeAnnonce()
    {
        $data["allAnnonce"] = $this->Annonce_Model->findAnnonceNonConfByService($this->session->userdata("responsable")["id_service"]);
        $this->load->view("static/header");
        $this->load->view("pages/listeAnnonceResponsable", $data);
        $this->load->view("static/footer");
    }
    
    // Liste de toutes les annonces
    public function listeAllAnnonce()
    {
        $data["allAnnonce"] = $this->Annonce_Model->findAnnonceByService($this->session->userdata("responsable")["id_service"]);
        $data["responsable"] = $this->session->userdata("responsable");
        $this->load->view("static/header");
        $this->load->view("pages/listeAllAnnonce", $data);
        $this->load->view("static/footer");
        // var_dump($this->session->userdata("responsable"));
    }

    // Formulaire pour remplir les besoins par annonce
    public function critereAnnonce($id_annonce) {
        $data["genre"] = $this->Annonce_Model->getAllGenre();
        $data["competenceTechnique"] = $this->Annonce_Model->getAllCompetenceTechnique();
        $data["competenceLinguistique"] = $this->Annonce_Model->getAllCompetenceLinguistique();
        $data["allPays"] = $this->Annonce_Model->getAllPays();
        $data["allDiplome"] = $this->Annonce_Model->getAllDiplome();
        $data["id_annonce"]=$id_annonce;
        $this->load->view("static/header");
        $this->load->view("pages/critereAnnonce", $data);
        $this->load->view("static/footer");
    }

    // Traitement de besoin
    public function newCritereAnnonce() {
        $genre=$this -> Annonce_Model -> getAllGenre();
        $noteGenre=array();
        $k=0;
        for($i=0; $i<count($genre); $i++) {
            if(strlen($this -> input -> post("genre".$genre[$i]["id_genre"]))!=0) {
                $noteGenre[$k]["note_genre"]=$this -> input -> post("genre".$genre[$i]["id_genre"]);
                $noteGenre[$k]["id_genre"]=$genre[$i]["id_genre"];
                $k++;
            }
        }
        
        $competenceTechnique=$this -> Annonce_Model -> getAllCompetenceTechnique();
        $noteCompetenceTechnique=array();
        $k=0;
        for($i=0; $i<count($competenceTechnique); $i++) {
            if(strlen($this -> input -> post("competenceTechnique".$competenceTechnique[$i]["id_competence_technique"]))!=0) {
                $noteCompetenceTechnique[$k]["noteCompetenceTechnique"]=$this -> input -> post("competenceTechnique".$competenceTechnique[$i]["id_competence_technique"]);
                $noteCompetenceTechnique[$k]["idCompetenceTechnique"]=$competenceTechnique[$i]["id_competence_technique"];
                $k++;
            }
        }

        $competenceLinguistique=$this -> Annonce_Model -> getAllCompetenceLinguistique();
        $scoreLinguistique=array();
        $k=0;
        for($i=0; $i<count($competenceLinguistique); $i++) {
            if(strlen($this -> input -> post("scoreLinguistique".$competenceLinguistique[$i]["id_pays_competence_linguistique"]))!=0) {
                $scoreLinguistique[$k]["note_competence_linguistique"]=$this -> input -> post("scoreLinguistique".$competenceLinguistique[$i]["id_pays_competence_linguistique"]);
                $scoreLinguistique[$k]["id_pays_competence_linguistique"]=$competenceLinguistique[$i]["id_pays_competence_linguistique"];
                $k++;
            }
        }

        $allPays=$this -> Annonce_Model -> getAllPays();
        $scoreNationalite=array();
        $k=0;
        for($i=0; $i<count($allPays); $i++) {
            if(strlen($this -> input -> post("scoreNationalite".$allPays[$i]["id_pays"]))!=0) {
                $scoreNationalite[$k]["note_nationalite"]=$this -> input -> post("scoreNationalite".$allPays[$i]["id_pays"]);
                $scoreNationalite[$k]["id_pays"]=$allPays[$i]["id_pays"];
                $k++;
            }
        }

        $allDiplome=$this -> Annonce_Model -> getAllDiplome();
        $noteDiplome=array();
        $k=0;
        for($i=0; $i<count($allDiplome); $i++) {
            if(strlen($this -> input -> post("noteDiplome".$allDiplome[$i]["id_diplome"]))!=0) {
                $noteDiplome[$k]["noteDiplome"]=$this -> input -> post("noteDiplome".$allDiplome[$i]["id_diplome"]);
                $noteDiplome[$k]["id_diplome"]=$allDiplome[$i]["id_diplome"];
                $k++;
            }
        }
        
        $casierOui=$this -> input -> post("casier1");
        $casierNon=$this -> input -> post("casier0");

        $note_experience=$this -> input -> post("note_experience");
        $annee_experience=$this -> input -> post("annee_experience");

        $note_position=$this -> input -> post("note_position");
        $distance_km=$this -> input -> post("distance_km");

        $id_annonce = $this -> input -> post("id_annonce");

        $this -> Annonce_Model -> remplirCritere($id_annonce, $noteGenre, $noteCompetenceTechnique, $scoreLinguistique, $scoreNationalite, $noteDiplome, $casierOui, $casierNon, $note_experience, $annee_experience, $note_position, $distance_km);

        redirect("Responsable_Controller/listeAnnonce");
    }

    // Detail et configuration des annonces non-configurés
    public function detailAnnonce($id_annonce) {
        $data["detailAnnonce"] = $this -> Annonce_Model -> getDetailAnnonce($id_annonce);
        $data["competenceTechnique"] = $this -> Annonce_Model -> getBesoinCompetenceTechniqueOfAnnonce($id_annonce);
        $data["competenceLinguistique"] = $this -> Annonce_Model -> getBesoinCompetenceLinguistiqueOfAnnonce($id_annonce);
        $this->load->view('static/header');
        $this -> load -> view("pages/detailAnnonceResponsable", $data);
		$this->load->view('static/footer');
    }
}
