<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_Doador2 extends MY_ControllerLogado {

	public function index() {

		$id_doador = $this->session->userdata('id_doador');

		$data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
    $this->load->view('cabecalho_view');
		$this->load->view('home_doador_view', $data);
	}

	function deslogar() {
		$this->session->sess_destroy();
    $this->load->view('cabecalho_view');
		$this->load->view('home_view_teste');

	}
	public function carregaMinhasDoacoes() {
		$id_doador = $this->session->userdata('id_doador');
		$data = array("dadosDoacao" => $this->Doador_model->minhasDoacoes());

		$dadosDoacao = $this->Doador_model->minhasDoacoes();

		foreach ($dadosDoacao as  $row) {
			echo $row->id_doador;
		}
		//$this->load->view('cabecalho_view');
		//$this->load->view('minhasDoacoes');
	}
	public function editaPerfilDoador() {
		$id_doador = $this->session->userdata('id_doador');
		$data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
		$this->load->view('cabecalho_view');
    $this->load->view('configuracoes_view', $data);
	}

	public function carregarPerfil() {
		$id_doador = $this->session->userdata('id_doador');
		$data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
$this->load->view('cabecalho_view');
    $this->load->view('perfil_doador_teste2', $data);
	}

	public function carregarCadastroDocao() {
		$id_doador = $this->session->userdata('id_doador');
		$data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
$this->load->view('cabecalho_view');
    $this->load->view('cadastrar_doacoes', $data);
	}



	public function salvarDoacao() {
		$dados_doacao = array();

		$this->Doacao_model->tipo_doacao = $this->input->post('doacao_tipodoacao');
		$this->Doacao_model->data_ultimadoacao = $this->input->post('doacao_ultimadoacao');
		$this->Doacao_model->data_doacao = $this->input->post('doacao_datadoacao');
		$this->Doacao_model->data_proximadoacao = $this->input->post('doacao_proximadoacao');
		$this->Doacao_model->hemocentro_nome = $this->input->post('hemocentro_nome');
		$this->Doacao_model->id_doador = $session_id = $this->session->userdata('id_doador');
		//$this->Doacao_model->ativo = 'SIM';

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_rules('doacao_tipodoacao', 'Tipo da Doacao', 'required|max_length[120]');
		$this->form_validation->set_rules('doacao_ultimadoacao', 'Data da ultima doacao', 'required|max_length[120]');
		$this->form_validation->set_rules('doacao_datadoacao', 'Data da doacao', 'required|max_length[120]');
		$this->form_validation->set_rules('hemocentro_nome', 'Nome do Hemocentro', 'required|max_length[120]');


		if ($this->form_validation->run() == FALSE) {
			$this->carregarCadastroDocao();
			return;
		} else {
			$this->Doacao_model->Salvar();
			redirect('Painel_doador2/carregaMinhasDoacoes');
		}
	}


	function Atualizar() {

		$data = array();
		$data['senha'] = md5($this->input->post('doador_senha'));
		$data['nome'] = $this ->input->post('doador_nome');
		$data['telefone'] = $this->input->post('doador_telefone');
		$data['email'] = $this->input->post('doador_email');
		$data['data_nascimento'] = $this->input->post('doador_datanascimento');
		$data['tipo_sanguineo'] = $this->input->post('doador_tiposanguineo');
		$data['sexo'] = $this->input->post('doador_sexo');
		$data['endereco'] = $this->input->post('doador_endereco');
		$data['cidade'] = $this->input->post('doador_cidade');
		$data['estado'] = $this->input->post('doador_estado');


		$this->Doador_model->alterarDoador($data);

		$id_doador = $this->session->userdata('id_doador');
		$dados2 = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
    $this->load->view('cabecalho_view');
    $this->load->view('perfil_doador_teste2', $dados2);

	}


}
