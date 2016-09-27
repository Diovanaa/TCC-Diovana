<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	// chama a tela de cadastro do doador
	public function chamandoCadastroDoador()
	{
		//cabeçalho
		$this->load->view('cabecalho_view');
		//body
		$this->load->view('cadastro_doador_view');
		//rodapé
		$this->load->view('rodape_view');
	}
	// chama a tela de cadastro do hemocentro
	public function chamandoCadastroHemocentro()
	{
		//cabeçalho
		$this->load->view('cabecalho_view');
		//body
		$this->load->view('cadastro_hemocentro_view');
		//rodapé
		$this->load->view('rodape_view');
	}
 }
