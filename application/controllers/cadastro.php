<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function chamandoCadastroDoador(){
		$this->load->view('cabecalho_view');
		$this->load->view('cadastro_doador_view');
		$this->load->view('rodape_view');
	}

	public function chamandoCadastroHemocentro(){
		$this->load->view('cabecalho_view');
		$this->load->view('cadastro_hemocentro_view');
		$this->load->view('rodape_view');
	}
 }
