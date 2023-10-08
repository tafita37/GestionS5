<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cv extends CI_Model
{

    public function getDiplome(){
        try {
            $query = $this->db->query('select * from diplome');
            $dbAll = array();
            foreach ($query->result_array() as $row) {
                array_push($dbAll, $row);
            }
        } catch (Exception $e) {
            // echo $e;
        }
        return $dbAll;
    }
    public function getFiliere(){
        try {
            $query = $this->db->query('select * from filiere');
            $dbAll = array();
            foreach ($query->result_array() as $row) {
                array_push($dbAll, $row);
            }
        } catch (Exception $e) {
            // echo $e;
        }
        return $dbAll;
    }
    public function getGenre(){
        try {
            $query = $this->db->query('select * from genre');
            $dbAll = array();
            foreach ($query->result_array() as $row) {
                array_push($dbAll, $row);
            }
        } catch (Exception $e) {
            // echo $e;
        }
        return $dbAll;
    }
    public function getNationalite(){
        try {
            $query = $this->db->query('select * from nationalite');
            $dbAll = array();
            foreach ($query->result_array() as $row) {
                array_push($dbAll, $row);
            }
        } catch (Exception $e) {
            // echo $e;
        }
        return $dbAll;
    }
    public function getAddress(){
        try {
            $query = $this->db->query('select * from adresse');
            $dbAll = array();
            foreach ($query->result_array() as $row) {
                array_push($dbAll, $row);
            }
        } catch (Exception $e) {
            // echo $e;
        }
        return $dbAll;
    }
    public function getStatutMatrimonial(){
        try {
            $query = $this->db->query('select * from statut_matrimonial');
            $dbAll = array();
            foreach ($query->result_array() as $row) {
                array_push($dbAll, $row);
            }
        } catch (Exception $e) {
            // echo $e;
        }
        return $dbAll;
    }


    public function getAllCv(){
        try {
            $query = $this->db->query('select * from v_cv');///venant de view
            $dbAll = array();
            foreach ($query->result_array() as $row) {
                array_push($dbAll, $row);
            }
        } catch (Exception $e) {
            // echo $e;
        }
        return $dbAll;
    }

    public function addCv($p,$a){
        try {
            $sql = "INSERT INTO  cv (id_personne,id_annonce)VALUES('%d','%d')";
            $sql = sprintf($sql,$p,$a);
            $this->db->query($sql);
        } catch (Exception $e) {
            //echo $e;
        }
    }
    public function addPersonne($nom_personne, $prenom_personne, $email_personne, $telephone_personne, $id_genre, $date_naissance, $id_adresse, $nb_enfant, $id_statut_matrimonial, $asuncasier){
        try {
            $sql = "INSERT INTO personne ( nom_personne, prenom_personne, email_personne, telephone_personne, id_genre, date_naissance, id_adresse, nb_enfant, id_statut_matrimonial, asuncasier)
            VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')";
            $sql = sprintf($sql,$nom_personne, $prenom_personne, $email_personne, $telephone_personne, $id_genre, $date_naissance, $id_adresse, $nb_enfant, $id_statut_matrimonial, $asuncasier);
            $this->db->query($sql);
        } catch (Exception $e) {
            //echo $e;
        }
    }
    public function addNationalite_personne($idNationnalite,$idPersonne){
        try {
            $sql = "INSERT INTO personne_nationalite (id_nationalite,id_personne)
            VALUES('%d','%d')";
            $sql = sprintf($sql,$idNationnalite,$idPersonne);
            $this->db->query($sql);
        } catch (Exception $e) {
            //echo $e;
        }
    }
	public function addDiplome_filiere_personne($idDiplome,$idFiliere,$idPersonne){
        try {
            $sql = "INSERT INTO diplome_filiere_personne  (id_diplome,id_filiere,id_personne)
            VALUES('%d','%d','%d')";
            $sql = sprintf($sql,$idDiplome,$idFiliere,$idPersonne);
            $this->db->query($sql);
        } catch (Exception $e) {
            //echo $e;
        }
    }

    public function getNationalite_personneByIdPersonne($id){
        try {
            $sql = "SELECT * FROM v_personne_nationalite WHERE id_personne='%s' LIMIT 1";
            $sql = sprintf($sql, $id);
            $query = $this->db->query($sql);
            $dbAll = $query->row_array();
        } catch (Exception $e) {
            // echo $e;
        }
        return $dbAll;
    }
    public function getDiplome_filiere_personneByIdPersonne($id){
        try {
            $sql = "SELECT * FROM v_diplome_filiere_personne WHERE id_personne='%s' LIMIT 1";
            $sql = sprintf($sql, $id);
            $query = $this->db->query($sql);
            $dbAll = $query->row_array();
        } catch (Exception $e) {
            // echo $e;
        }
        return $dbAll;
    }

    public function getCvById($id){
        try {
            $sql = "SELECT * FROM v_cv WHERE id_cv='%s' LIMIT 1";
            $sql = sprintf($sql, $id);
            $query = $this->db->query($sql);
            $dbAll = $query->row_array();
        } catch (Exception $e) {
            // echo $e;
        }
        return $dbAll;
    }

    public function getLastPersonne(){
        try {
            $sql = "SELECT id_personne FROM personne ORDER BY id_personne DESC LIMIT 1";
            $query = $this->db->query($sql);
            $dbAll =$query->result_array();
        } catch (Exception $e) {
        // echo $e;
        }
        return $dbAll[0]['id_personne'];
    }

    // INSERT INTO personne ( nom_personne, prenom_personne, email_personne, telephone_personne, id_genre, date_naissance, id_adresse, nb_enfant, id_statut_matrimonial, asuncasier) 
    // VALUES('RAZ','Rod','razrodrigue01@gmail.com','034','1','2023-10-07','','','1','2')


}