<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function CreationDeFormulaireQCM()
	{
		$this->load->view('static/header');
        $this->load->view('pages/CreationDeFormulaireQCM');
		$this->load->view('static/footer');
		
	}
}