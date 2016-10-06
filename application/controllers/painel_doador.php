<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_doador extends MY_ControllerLogado {

	public function index() {

	$id_doador= $this->session->userdata('id_doador');
		$data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row(),"minhasDoacoes" => $this->Doador_model->minhasDoacoes());

	$this->load->view('cabecalho_view');
		$this->load->view('home_doador_view',$data);
	}

	public function carregaPerfilDoador() {
		$id_doador = $this->session->userdata('id_doador');
		$data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
		$this->load->view('cabecalho_view');
		$this->load->view('perfil_doador_teste');
	}
	public function carregaMinhasDoacoes() {
		$id_doador = $this->session->userdata('id_doador');
		$data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
		$this->load->view('cabecalho_view');
		$this->load->view('minhasDoacoes');
	}
	public function editaPerfilDoador() {
		$id_doador = $this->session->userdata('id_doador');
		$data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
		$this->load->view('cabecalho_view');
		$this->load->view('configuracoes_view');
	}

/*	public function Editar() {

		$data = array();
		$senha = $this -> input -> post ('doador_senha');
		$data['nome'] = $this->input->post('nome');
		$data['telefone'] = $this->input->post('telefone');
		$data['data_nascimento'] = $this->input->post('data_nascimento');
    $data['tipo_sanguineo'] = $this->input->post('tipo_sanguineo');

    $data['email'] = $this->input->post('email');
    $data['sexo'] = $this->input->post('sexo');

		if ($senha == ''){
			$id_doador = $this->session->userdata('id_doador');
			$dados2 = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
			$this->Doador_model->alterarDoador($data);
			$this->carregaPerfilDoador();
		}else{
			$data['senha'] = md5($this->input->post('doador_senha'));
			$this->Doador_model->alterarDoador($data);
			$this->carregaPerfilDoador();
		}


	}*/
	function Editar() {

		$data = array();
		$data['senha'] = md5($this->input->post('doador_senha'));
		$data['nome'] = $this ->input->post('doador_nome');
		$data['telefone'] = $this->input->post('doador_telefone');
		$data['email'] = $this->input->post('doador_email');
		$data['data_nascimento'] = $this->input->post('data_nascimento');
		$data['tipo_sanguineo'] = $this->input->post('tipo_sanguineo');
		$data['sexo'] = $this->input->post('sexo');
		$data['endereco'] = $this->input->post('endereco');
		$data['estado'] = $this->input->post('estado');
		$data['cidade'] = $this->input->post('cidade');


		$this->Doador_model->alterarDoador($data);

		$id_doador = $this->session->userdata('id_doador');
		$dados2 = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
		$this->load->view('perfil_doador_teste', $dados2);

	}

	function Sair() {
		$this->session->sess_destroy();
		$this->load->view('cabecalho_view');
		$this->load->view('home_view_teste');

	}



	public function carregarPerfil() {
		$id_doador = $this->session->userdata('id_doador');
		$data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
		$this->load->view('perfil_doador_teste', $data);
	}

}
