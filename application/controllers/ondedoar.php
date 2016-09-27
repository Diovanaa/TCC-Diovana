<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ondedoar extends CI_Controller {

	// chama a tela de onde doar
	public function chamandoOndeDoar()
	{
		//cabeçalho
		$this->load->view('cabecalho_view');
		//body
		$this->load->view('onde_doar_view');
		//rodapé
		$this->load->view('rodape_view');
	}

 }
