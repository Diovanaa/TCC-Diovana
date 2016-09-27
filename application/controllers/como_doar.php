<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Como_doar extends CI_Controller {

	// chama a tela de onde doar
	public function chamandoComoDoar()
	{
		//cabeçalho
		$this->load->view('cabecalho_view');
		//body
		$this->load->view('como_doar_view');
		//rodapé
		$this->load->view('rodape_view');
	}

 }
