<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client_Controllers extends CI_Controller
{
    public function RemplissageDeFormulaireQCM()
    {
        $this->load->view('static/header');
        $this->load->view('pages/RemplissageQcm');
        $this->load->view('static/footer');
    }
}
?>