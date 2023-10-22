<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client_Controllers extends CI_Controller
{
    public function RemplissageDeFormulaireQCM()
    {
        $idService = 1;
        $idFiche = 1;
        $this->load->model('CRUD_Model');
        $data['fiche'] = $this->CRUD_Model->getFiche("id_service=$idService and id_fiche_qcm=$idFiche");
        $data['fiche_question'] = $this->CRUD_Model->getQuestion("id_fiche_qcm={$data['fiche'][0]['id_fiche_qcm']}");
        $question_reponses = array();

        foreach ($data['fiche_question'] as $question) {
            $question_reponses_temp = array();
            $reponses = $this->CRUD_Model->getReponse("id_question={$question['id_question']}");
            $question_reponses_temp['question'] = $question;
            $question_reponses_temp['reponses'] = $reponses;
            $question_reponses[] = $question_reponses_temp;
        }
        // $prettyPrintedArray = json_encode($question_reponses, JSON_PRETTY_PRINT);
        // // echo '<pre>' . $prettyPrintedArray . '</pre> <br><br>';
        // echo '<pre>' . $prettyPrintedArray . '</pre> <br><br>';
        // echo '<pre>' . $question_reponses[0]['question']['question'] . '</pre> <br><br>';
        // echo '<pre>' . $question_reponses[0]['reponses'][0]['reponse'] . '</pre> <br><br>';
        // // print_r($question_reponses[0]['reponses']);
        // show_error("____XX_____");
        $data['question_reponses'] = $question_reponses;
        $this->load->view('static/header');
        $this->load->view('pages/RemplissageQcm', $data);
        $this->load->view('static/footer');
    }
    public function inserResultatQCM()
    {
        print_r($this->input->post());
        $score = 0;
        $this->load->model('CRUD_Model');
        $id_cv = $this->input->post('id_cv');
        $nombreQuestion = $this->input->post('nombreQuestion');
        
        for ($i = 1; $i <= $nombreQuestion; $i++) {
            $nbpointQ = $this->input->post("nbpointQ$i");
            $reponsesCorrectes = 0;
            // $question = json_decode($this->input->post("question_reponses"), true);
            $question = json_decode(html_entity_decode($this->input->post("question_reponses")), true);
            
            // $question = json_decode($this->input->post("question_reponses"), true)[$i - 1]['question']['question'];
            
            echo "quest =>";
            print_r($question);
        //     $idQuestion = $this->CRUD_Model->getidquestion($question);
        //     $nombreReponse = $this->CRUD_Model->getNombreReponseParQuestion($idQuestion);
        //     $reponses = $this->CRUD_Model->getReponsesCorrectesPourQuestion($idQuestion);
        //     $reponsesIncorrectes = 0;
            
        //     for ($u = 1; $u <= $nombreReponse; $u++) {
        //         $checkboxName = "checkQ$i" . "R$u";
        //         if ($this->input->post($checkboxName) == "on") {
        //             // La réponse a été sélectionnée
        //             if (in_array($u, $reponses)) {
        //                 // La réponse sélectionnée est correcte
        //                 $reponsesCorrectes++;
        //             } else {
        //                 // La réponse sélectionnée est incorrecte
        //                 $reponsesIncorrectes++;
        //             }
        //         }
        //     }
        //     if ($reponsesIncorrectes > 0) {
        //         // Si au moins une réponse incorrecte est sélectionnée, attribuer zéro point
        //         $score += 0;
        //     } else {
        //         // Sinon, attribuer des points en fonction des réponses correctes
        //         $score += ($reponsesCorrectes / $nombreReponse) * $nbpointQ;
        //     }
        }
        // $resultatTestPersonne = array(
        //     'score' => $score,
        //     'id_cv' => $id_cv,
        // );
        // $this->CRUD_Model->insertResultatTestPersonne($resultatTestPersonne);
    }

}
?>