<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ondedoar extends CI_Controller {


	public function chamandoOndeDoar(){
		$this->load->view('cabecalho_view');
		$this->load->view('onde_doar_view');
		$this->load->view('rodape_view');
	}

 }
