<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client_Controllers extends CI_Controller
{
    public function RemplissageDeFormulaireQCM()
    {
        $idService = 1;
        $idFiche =1;
        $this->load->model('CRUD_Model');
        $data['fiche'] = $this->CRUD_Model->getFiche("id_service=$idService and id_fiche_qcm=$idFiche");
        $data['fiche_question'] = $this->CRUD_Model->getQuestion("id_fiche_qcm={$data['fiche'][0]['id_fiche_qcm']}");
        $question_reponses =array();
        
        foreach($data['fiche_question'] as $question)
        {
            $question_reponses_temp=array();
            $reponses =$this->CRUD_Model->getReponse("id_question={$question['id_question']}");
            $question_reponses_temp['question']=$question;
            $question_reponses_temp['reponses']=$reponses;
            $question_reponses[]=$question_reponses_temp;
        }
        // $prettyPrintedArray = json_encode($question_reponses, JSON_PRETTY_PRINT);
        // // echo '<pre>' . $prettyPrintedArray . '</pre> <br><br>';
        // echo '<pre>' . $question_reponses[0]['question']['question'] . '</pre> <br><br>';
        // echo '<pre>' . $question_reponses[0]['reponses'][0]['reponse'] . '</pre> <br><br>';
        // // print_r($question_reponses[0]['reponses']);
        // show_error("____XX_____");
        $data['question_reponses'] = $question_reponses;
        $this->load->view('static/header');
        $this->load->view('pages/RemplissageQcm',$data);
        $this->load->view('static/footer');
    }
    public function inserResultatQCM()
    {
        
    }
}
?>
