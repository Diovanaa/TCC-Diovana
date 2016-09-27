<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_hemocentro extends MY_ControllerLogado {

	public function index() {

		$id_hemocentro = $this->session->userdata('id_hemocentro');

		$data = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row());

		$this->load->view('home_hemocentro', $data);
	}

	function deslogar() {
		$this->session->sess_destroy();
		$this->load->view('home2');

	}

	public function carregarPerfil() {
		$id_hemocentro = $this->session->userdata('id_hemocentro');
		$data = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row());
		$this->load->view('perfil_hemocentro', $data);
	}

	public function carregarCadastroDoacao() {
		$id_hemocentro = $this->session->userdata('id_hemocentro');
		$data = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row());
		$this->load->view('cadastro_doacao', $data);
	}

	public function salvarDoacao() {
		$dados_doacao = array();

		$this->Doacao_model->tipo_doacao = $this->input->post('doacao_tipo_doacao');
		$this->Doacao_model->data_doacao = $this->input->post('doacao_data_doacao');
		$this->Doacao_model->data_ultimadoacao = $this->input->post('doacao_data_ultimadoacao');
		$this->Doacao_model->data_proximadoacao = $this->input->post('doacao_data_proximadoacao');
		$this->Doacao_model->id_doador = $this->input->post('id_doador');
		$this->Doacao_model->id_hemocentro = $this->input->post('id_hemocentro');
		$this->Doacao_model->estado = $this->input->post('doacao_estado');
		$this->Doacao_model->cidade = $this->input->post('doacao_cidade');
		$this->Doacao_model->ativo = 'SIM';

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_rules('doacao_tipo_doacao_nome', 'Tipo de Doação', 'required|max_length[120]');
		$this->form_validation->set_rules('doacao_data_doacao', 'Data da doação', 'required|max_length[120]');
		$this->form_validation->set_rules('data_ultimadoacao','Informar data da ultima doação', 'required|max_length[120]');
		$this->form_validation->set_rules('doacao_data_proximadoacao', 'Informar a data da próxima doação', 'required|max_length[120]');
		$this->form_validation->set_rules('doacao_estado', 'Estado', 'required|max_length[120]');
		$this->form_validation->set_rules('doacao_cidade', 'Cidade', 'required|max_length[120]');


		if ($this->form_validation->run() == FALSE) {
			$this->carregarCadastroDoacao();
			return;
		} else {
			$this->Doacao_model->Salvar();
			redirect('Painel_hemocentro/carregarCadastroDoacao/?aviso=1');
		}

	}

	function Atualizar() {

		$data = array();
		$data['senha'] = md5($this->input->post('senha'));
		$data['nome'] = $this ->input->post('nome');
		$data['telefone'] = $this->input->post('telefone');
		$data['email'] = $this->input->post('email');
		$data['estoque'] = $this->input->post('estoque');
		$data['rua'] = $this->input->post('rua');
		$data['bairro'] = $this->input->post('bairro');
		$data['numero'] = $this->input->post('numero');
		$data['cidade'] = $this->input->post('cidade');
		$data['uf'] = $this->input->post('uf');
		$data['cep'] = $this->input->post('cep');

		$this->Hemocentro_model->alterar($data);

		$id_hemocentro = $this->session->userdata('id_hemocentro');
		$dados2 = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row());
		$this->load->view('perfil_hemocentro', $dados2);

	}

}
