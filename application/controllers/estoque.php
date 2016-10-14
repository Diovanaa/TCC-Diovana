<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Estoque extends MY_ControllerLogado {

	public function index() {

		$id_hemocentro = $this->session->userdata('id_hemocentro');

		$data = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row());
    $this->load->view('hemocentro/cabecalho_hemocentro');
		$this->load->view('hemocentro/home_hemocentro_view', $data);
	}

  public function carregaMeuEstoque(){
    $id_hemocentro = $this->session->userdata('id_hemocentro');
    $data = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row(),
    "m" => $this->Doacao_model->getDoacoes());

    $this->load->view('minhas_doacoes', $data);
  }
