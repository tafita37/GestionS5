<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RH_Controllers extends CI_Controller
{
	public function CreationDeFormulaireQCM()
	{
		$this->load->view('static/header');
		$this->load->view('pages/CreationDeFormulaireQCM');
		$this->load->view('static/footer');

	}
	public function insertQuestionnaire()
	{
		$qcm = $this->input->post();
		if (empty($qcm)) {
			show_error("qcm was empty ");
		}

		$this->load->model("CRUD_Model");
		$qr = $this->CRUD_Model->transformArray($qcm);

		$this->db->trans_start();
		$fiche = array(
			'nom_fiche' => $qcm['qcmTitle'],
			'date_creation' => date('Y-m-d'),
			'id_service' => $qcm['departement'],
		);
		echo $this->CRUD_Model->insertFiche($fiche);
		$query1 = $this->DaoM->lastRow("fiche_qcm","id_fiche_qcm");
		foreach ($qr as $questions) {
			$questionsInsert = array(
				'question' => $questions['question'],
				'nbpoint' => $questions['nbpoint'],
				'id_fiche_qcm' => $query1['id_fiche_qcm']
			);
			$this->CRUD_Model->insertQuestion($questionsInsert);
			
			$query2 = $this->DaoM->lastRow("question","id_question");
			$reponses = $questions['reponses'];
			foreach ($reponses as $reponse) {
				$reponseInsert = array(
					'reponse' => $reponse['reponse'],
					'valeur_verite' => (($reponse['radio'] == "correct") ? 1 : 0),
					'id_question' => $query2['id_question']
				);
				$this->CRUD_Model->insertReponse($reponseInsert);
			}
		}
		$data['qcm'] = $qcm;
		$this->load->view('static/header');
		$this->load->view('pages/CreationDeFormulaireQCM', $data);

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			show_error("insert failed");
		} else {
			$this->db->trans_commit();
		}
		show_error("erreur mirenty2 ");
	}

}