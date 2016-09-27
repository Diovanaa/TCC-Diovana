<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_doador extends MY_ControllerLogado {

	public function index() {

		$id_doador= $this->session->userdata('id_doador');
		$data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row(),
	"minhasDoacoes" => $this->Doador_model->minhasDoacoesAtuais());
		$this->load->view('home_doador_view', $data);
	}

	public function carregaPerfilDoador() {
		$id_doador = $this->session->userdata('id_doador');
		$data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
		$this->load->view('perfil_doador_teste', $data);
	}

	public function Atualizar() {

		$data = array();
		$senha = $this -> input -> post ('doador_senha');
		$data['nome'] = $this->input->post('nome');
		$data['telefone'] = $this->input->post('telefone');
		$data['data_nascimento'] = $this->input->post('data_nascimento');
    $data['tipo_sanguineo'] = $this->input->post('tipo_sanguineo');
    $data['fatorRH'] = $this->input->post('fatorRH');
    $data['email'] = $this->input->post('email');
    $data['sexo'] = $this->input->post('sexo');

		if ($senha == ''){
			$id_doador = $this->session->userdata('id_doador');
			$dados2 = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
			$this->Doador_model->alterar($data);
			$this->carregaPerfilDoador();
		}else{
			$data['senha'] = md5($this->input->post('doador_senha'));
			$this->Doador_model->alterar($data);
			$this->carregaPerfilDoador();
		}


	}

	function sair() {
		$this->session->sess_destroy();
		$this->load->view('home_view_teste');

	}

	public function carregarPerfil() {
		$id_doador = $this->session->userdata('id_doador');
		$data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
		$this->load->view('perfil_doador_teste', $data);
	}

}
