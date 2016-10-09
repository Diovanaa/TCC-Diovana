<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Doacao extends MY_ControllerLogado {

	public function index() {

		$id_doador = $this->session->userdata('id_doador');

		$data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());

		$this->load->view('home_doador_teste', $data);
	}

  public function carregaMinhasDoacoes(){
    $id_doador = $this->session->userdata('id_doador');
    $data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row(),
    "minhasDoacoes" => $this->Doacao_model->getDoacoes());

    $this->load->view('minhas_doacoes', $data);
  }
	
