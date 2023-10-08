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
			show_error("erreur mirenty ");
		}



		$this->load->model("CRUD_Model");
		$qr = $this->CRUD_Model->transformArray($qcm);

		// $prettyPrintedArray = json_encode($this->CRUD_Model->transformArray($qcm), JSON_PRETTY_PRINT);

		// echo '<pre>' . $prettyPrintedArray . '</pre>';

		$this->db->trans_start();
		$fiche = array(
			'nom_fiche' => $qcm['qcmTitle'],
			'date_creation' => date('Y-m-d'),
			'id_service' => $qcm['departement'],
		);
		$query1 = $this->CRUD_Model->insertFiche($fiche);
		foreach ($qr as $questions) {
			$questionsInsert = array(
				'question' => $questions['question'],
				'nbpoint' => $questions['nbpoint'],
				'id_fiche_qcm' => $query1->last_row()['id_fiche_qcm']
			);

			$query2 = $this->CRUD_Model->insertQuestion($questionsInsert);
			$reponses = $questions['reponses'];
			foreach ($reponses as $reponse) {
				$reponseInsert = array(
					'reponse' => $reponse['reponse'],
					'valeur_verite' => (($reponse['radio'] == "correct") ? 1 : 0),
					'id_question' => $query2->last_row()['id_question']
				);
				$query3 = $this->CRUD_Model->insertQuestion($reponseInsert);

			}
		}
		$data['qcm'] = $qcm;
		$this->load->view('static/header');
		$this->load->view('pages/CreationDeFormulaireQCM', $data);

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
		} else {
			$this->db->trans_commit();
		}
		show_error("erreur mirenty2 ");


		// $this->load->model('CRUD_Model');
		// // $inserted = $this->QCM_model->insertQCMData($qcmData);
		// // if ($inserted) {
		// // 	$response = array('success' => true, 'message' => 'Données insérées avec succès.');
		// // } else {
		// // 	$response = array('success' => false, 'message' => 'Échec de l\'insertion des données.');
		// // }
	}

}