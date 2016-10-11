<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Como_doar extends CI_Controller {


	public function chamandoComoDoar(){
		$this->load->view('cabecalho_view');
		$this->load->view('como_doar_view');
		$this->load->view('rodape_view');
	}

 }
