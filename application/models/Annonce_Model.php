<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Annonce_Model extends CI_Model {

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

    public function findBesoinGenreByIdAnnonce($id_annonce) {
        $sql="select*from v_besoin_genre where id_annonce='".$id_annonce."'";
        $query=$this -> db -> query($sql);
        $result=array();
        foreach($query -> result_array() as $row) {
            $result[]=$row;
        }
        return $result;
    }

    public function getBesoinGenreOfAnnonce($id_annonce) {
        $besoinGenre=$this -> findBesoinGenreByIdAnnonce($id_annonce);
        $result="";
        for($i=0; $i<count($besoinGenre)-1; $i++) {
            $result=$result.$besoinGenre[$i]["nom_genre"].", ";
        }
        if(count($besoinGenre)>0) {
            $result=$result.$besoinGenre[count($besoinGenre)-1]["nom_genre"];
        }
        return $result;
    }

    public function getNormeDateAnnonce($id_annonce) {
        $sql="select*from v_date_annonce where id_annonce='".$id_annonce."'";
        $query=$this -> db -> query($sql);
        $result=array();
        foreach($query -> result_array() as $row) {
            $result=$row;
        }
        return $result["jour_annonce"]." ".$result["nom_mois"]." ".$result["annee_annonce"];
    }

    public function getNormeDateDepotFinal($id_annonce) {
        $sql="select*from v_date_depot_final where id_annonce='".$id_annonce."'";
        $query=$this -> db -> query($sql);
        $result=array();
        foreach($query -> result_array() as $row) {
            $result=$row;
        }
        return $result["jour_depot_final"]." ".$result["nom_mois"]." ".$result["annee_depot_final"];
    }

    public function getDetailAnnonce($id_annonce) {
        $sql="select*from v_annonce_diplome_filiere where id_annonce='".$id_annonce."'";
        $query=$this -> db -> query($sql);
        $result=array();
        foreach($query -> result_array() as $row) {
            $result=$row;
        }
        $result["experience_requis"]="+".$result["experience_requis"]." ans";
        $result["distance_entreprise"]="<".$result["distance_entreprise"]." km";
        $result["age_min"]=$result["age_min"]." ans";
        $result["age_max"]=$result["age_max"]." ans";
        $result["genre"]=$this -> getBesoinGenreOfAnnonce($id_annonce);
        $result["date_annonce"]=$this -> getNormeDateAnnonce($id_annonce);
        return $result;
    }

    public function getAllAnnonce() {
        $sql="select*from v_annonce_diplome_filiere";
        $query=$this -> db -> query($sql);
        $result=array();
        $i=0;
        foreach($query -> result_array() as $row) {
            $result[$i]=$row;
            $result[$i]["date_annonce"]=$this -> getNormeDateAnnonce($result[$i]["id_annonce"]);
            $result[$i]["date_depot_final"]=$this -> getNormeDateDepotFinal($result[$i]["id_annonce"]);
            if($result[$i]["duree_contrat"]!=0) {
                $result[$i]["duree_contrat"].=" ans";
            } else {
                $result[$i]["duree_contrat"]="CDI";
            }
            $i++;
        }
        return $result;
    }

    public function findAnnonceByService($id_service) {
        $sql="select*from v_annonce_diplome_filiere where id_service='".$id_service."'";
        $query=$this -> db -> query($sql);
        $result=array();
        $i=0;
        foreach($query -> result_array() as $row) {
            $result[$i]=$row;
            $result[$i]["date_annonce"]=$this -> getNormeDateAnnonce($result[$i]["id_annonce"]);
            $result[$i]["date_depot_final"]=$this -> getNormeDateDepotFinal($result[$i]["id_annonce"]);
            $i++;
        }
        return $result;
    }

    public function findAnnonceNonConfByService($id_service) {
        $sql="select*from v_annonce_non_configure where id_service='".$id_service."'";
        $query=$this -> db -> query($sql);
        $result=array();
        $i=0;
        foreach($query -> result_array() as $row) {
            $result[$i]=$row;
            $result[$i]["date_annonce"]=$this -> getNormeDateAnnonce($result[$i]["id_annonce"]);
            $result[$i]["date_depot_final"]=$this -> getNormeDateDepotFinal($result[$i]["id_annonce"]);
            if($result[$i]["duree_contrat"]==0) {
                $result[$i]["duree_contrat"]="CDI";
            }
            $i++;
        }
        return $result;
    }

    public function findAllAnnonceNonConf() {
        $sql="select*from v_annonce_non_configure";
        $query=$this -> db -> query($sql);
        $result=array();
        $i=0;
        foreach($query -> result_array() as $row) {
            $result[$i]=$row;
            $result[$i]["date_annonce"]=$this -> getNormeDateAnnonce($result[$i]["id_annonce"]);
            $result[$i]["date_depot_final"]=$this -> getNormeDateDepotFinal($result[$i]["id_annonce"]);
            if($result[$i]["duree_contrat"]==0) {
                $result[$i]["duree_contrat"]="CDI";
            }
            $i++;
        }
        return $result;
    }

    public function getAllService() {
        $sql="select*from services";
        $query=$this -> db -> query($sql);
        $result=array();
        foreach($query -> result_array() as $row) {
            $result[]=$row;
        }
        return $result;
    }
    
    public function getBesoinCompetenceTechniqueOfAnnonce($id_annonce) {
        $sql="select*from v_besoin_competence_technique where id_annonce='".$id_annonce."'";
        $query=$this -> db -> query($sql);
        $result=array();
        foreach($query -> result_array() as $row) {
            $result[]=$row;
        }
        return $result;
    }

    public function getBesoinCompetenceLinguistiqueOfAnnonce($id_annonce) {
        $sql="select*from v_besoin_competence_linguistique where id_annonce='".$id_annonce."'";
        $query=$this -> db -> query($sql);
        $result=array();
        foreach($query -> result_array() as $row) {
            $result[]=$row;
        }
        return $result;
    }

    public function getCorrespondingResponsable($email, $mdp) {
        $sql="select*from v_responsable where email_responsable='%s' and mdp_responsable='%s'";
        $sql=sprintf($sql, $email, $mdp);
        $query=$this -> db -> query($sql);
        $result=array();
        foreach($query -> result_array() as $row) {
            $result=$row;
        }
        return $result;
    }

    public function getCorrespondingRH($email, $mdp) {
        $sql="select*from rh where email_rh='%s' and mdp_rh='%s'";
        $sql=sprintf($sql, $email, $mdp);
        $query=$this -> db -> query($sql);
        $result=array();
        foreach($query -> result_array() as $row) {
            $result=$row;
        }
        return $result;
    }
 
    public function getAllDiplome() {
        $sql="select*from diplome";
        $query=$this -> db -> query($sql);
        $result=array();
        foreach($query -> result_array() as $row) {
            $result[]=$row;
        }
        return $result;
    }

    public function getAllFiliere() {
        $sql="select*from filiere";
        $query=$this -> db -> query($sql);
        $result=array();
        foreach($query -> result_array() as $row) {
            $result[]=$row;
        }
        return $result;
    }

    public function newAnnonce($id_service, $titre_annonce, $id_diplome, $id_filiere, $experience_requis, $distance_entreprise, $duree_contrat, $salaire_min, $salaire_max, $v_horaire_jour, $date_depot_final, $age_min, $age_max, $description_annonce) {
        if(!$duree_contrat||strlen($duree_contrat)==0) {
            $sql="insert into annonce values(default, '%s', '%s', now()::timestamp, '%s', '%s', '%s', '%s', 0, '%s', '%s', '%s', '%s', null, '%s', '%s', '%s', 0)";
            $sql=sprintf($sql, $id_service, $titre_annonce, $id_diplome, $id_filiere, $experience_requis, $distance_entreprise, $salaire_min, $salaire_max, $v_horaire_jour, $date_depot_final, $age_min, $age_max, $description_annonce);
        } else {
            $sql="insert into annonce values(default, '%s', '%s', now()::timestamp, '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', null, '%s', '%s', '%s', 0)";
            $sql=sprintf($sql, $id_service, $titre_annonce, $id_diplome, $id_filiere, $experience_requis, $distance_entreprise, $duree_contrat, $salaire_min, $salaire_max, $v_horaire_jour, $date_depot_final, $age_min, $age_max, $description_annonce);
        }
        $this -> db -> query($sql);
        // echo $sql;
    }

    public function getAllGenre() {
        $sql="select*from genre";
        $query=$this -> db -> query($sql);
        $result=array();
        foreach($query -> result_array() as $row) {
            $result[]=$row;
        }
        return $result;
    }

    public function getAllCompetenceTechnique() {
        $sql="select*from competence_technique";
        $query=$this -> db -> query($sql);
        $result=array();
        foreach($query -> result_array() as $row) {
            $result[]=$row;
        }
        return $result;
    }

    public function getAllCompetenceLinguistique() {
        $sql="select*from v_pays_competence_linguistique";
        $query=$this -> db -> query($sql);
        $result=array();
        $i=0;
        foreach($query -> result_array() as $row) {
            $result[$i]=$row;
            $result[$i]["nom_competence_pays"]=$result[$i]['nom_competence_linguistique']." de ".$result[$i]['nom_pays'];
            $i++;
        }
        return $result;
    }

    public function getAllPays() {
        $sql="select*from pays";
        $query=$this -> db -> query($sql);
        $result=array();
        foreach($query -> result_array() as $row) {
            $result[]=$row;
        }
        return $result;
    }
    
    public function getAllJournalier() {
        $sql="select*from journalier";
        $query=$this -> db -> query($sql);
        $result=array();
        foreach($query -> result_array() as $row) {
            $result[]=$row;
        }
        return $result;
    }

    public function getJournalierById($id_journalier) {
        $sql="select*from journalier where id_journalier='".$id_journalier."'";
        $query=$this -> db -> query($sql);
        $result=array();
        foreach($query -> result_array() as $row) {
            $result=$row;
        }
        return $result;
    }

    public function getVolumeHoraireJour($id_journalier, $volume_horaire) {
        $journalier=$this -> getJournalierById($id_journalier);
        return $volume_horaire/$journalier["nb_jour"];
    }

    public function newBesoinGenre($id_annonce, $noteGenre) {
        for($i=0; $i<count($noteGenre); $i++) {
            $sql="insert into besoin_genre values(default, '%s', '%s', '%s')";
            $sql=sprintf($sql, $id_annonce, $noteGenre[$i]["id_genre"], $noteGenre[$i]["note_genre"]);
            $this -> db -> query($sql);
        }
    }

    public function newBesoinCompetenceTechnique($id_annonce, $noteCompetenceTechnique) {
        for($i=0; $i<count($noteCompetenceTechnique); $i++) {
            $sql="insert into besoin_competence_technique values(default, '%s', '%s', '%s')";
            $sql=sprintf($sql, $id_annonce, $noteCompetenceTechnique[$i]["idCompetenceTechnique"], $noteCompetenceTechnique[$i]["noteCompetenceTechnique"]);
            $this -> db -> query($sql);
        }
    }

    public function newBesoinCompetenceLinguistique($id_annonce, $scoreLinguistique) {
        for($i=0; $i<count($scoreLinguistique); $i++) {
            $sql="insert into besoin_competence_linguistique values(default, '%s', '%s', '%s')";
            $sql=sprintf($sql, $id_annonce, $scoreLinguistique[$i]["id_pays_competence_linguistique"], $scoreLinguistique[$i]["note_competence_linguistique"]);
            $this -> db -> query($sql);
        }
    }

    public function newBesoinNationalite($id_annonce, $scoreNationalite) {
        for($i=0; $i<count($scoreNationalite); $i++) {
            $sql="insert into besoin_nationalite values(default, '%s', '%s', '%s')";
            $sql=sprintf($sql, $id_annonce, $scoreNationalite[$i]["id_pays"], $scoreNationalite[$i]["note_nationalite"]);
            $this -> db -> query($sql);
        }
    }

    public function newBesoinDiplome($id_annonce, $noteDiplome) {
        for($i=0; $i<count($noteDiplome); $i++) {
            $sql="insert into besoin_diplome values(default, '%s', '%s', '%s')";
            $sql=sprintf($sql, $id_annonce, $noteDiplome[$i]["id_diplome"], $noteDiplome[$i]["noteDiplome"]);
            $this -> db -> query($sql);
        }
    }

    public function newBesoinCasier($id_annonce, $casierOui, $casierNon) {
        $sql="insert into casier_judiciaire values(default, 1, '%s', '%s')";
        $this -> db -> query(sprintf($sql, $id_annonce, $casierOui));
        $sql="insert into casier_judiciaire values(default, 0, '%s', '%s')";
        $this -> db -> query(sprintf($sql, $id_annonce, $casierNon));
    }

    public function newBesoinExperience($id_annonce, $note_experience, $annee_experience) {
        $sql="insert into besoin_experience values(default, '%s', '%s', '%s')";
        $this -> db -> query(sprintf($sql, $id_annonce, $note_experience, $annee_experience));
    }

    public function newBesoinPosition($id_annonce, $note_position, $distance_km) {
        $sql="insert into besoin_position values(default, '%s', '%s', '%s')";
        $this -> db -> query(sprintf($sql, $id_annonce, $note_position, $distance_km));
    }

    public function changeConfigurationAnnonce($id_annonce) {
        $sql="update annonce set estConfigure=11 where id_annonce='".$id_annonce."'";
        $this -> db -> query($sql);
    }

    public function remplirCritere($id_annonce, $noteGenre, $noteCompetenceTechnique, $scoreLinguistique, $scoreNationalite, $noteDiplome, $casierOui, $casierNon, $note_experience, $annee_experience, $note_position, $distance_km) {
        $this -> newBesoinGenre($id_annonce, $noteGenre);
        $this -> newBesoinCompetenceTechnique($id_annonce, $noteCompetenceTechnique);
        $this -> newBesoinCompetenceLinguistique($id_annonce, $scoreLinguistique);
        $this -> newBesoinNationalite($id_annonce, $scoreNationalite);
        $this -> newBesoinCasier($id_annonce, $casierOui, $casierNon);
        $this -> newBesoinExperience($id_annonce, $note_experience, $annee_experience);
        $this -> newBesoinPosition($id_annonce, $note_position, $distance_km);
        $this -> changeConfigurationAnnonce($id_annonce);
    } 
}
