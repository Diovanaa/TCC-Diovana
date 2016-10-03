<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doacoes extends CI_Controller {

	public function index() {
		$this->load->view('cabecalho_view');
		$this->load->view('doacoes_view');
	}
	public function carregarCadastroDoacao() {
		$id_hemocentro = $this->session->userdata('id_hemocentro');

		$data = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row());
		$this->load->view('cabecalho_view');
		$this->load->view('minhasDoacoes', $data);

	}

  public function salvar() {
		$dados_vaga = array();

    $this->Doacao_model->data_doacao = $this->input->post('doacao_data');
    $this->Doacao_model->doacao_ultimadoacao = $this->input->post('doacao_ultimadoacao');
    $this->Doacao_model->tipo_doacao = $this->input->post('doacao_tipo');
    $this->Doacao_model->hemocentro_nome = $this->input->post('hemocentro_nome');
		$this->Doacao_model->id_hemocentro = $session_id = $this->session->userdata('id_hemocentro');
		$this->Doacao_model->id_doador = $session_id = $this->session->userdata('id_doador');
    $this->Doacao_model->data_proximadoacao = $this->input->post('doacao_proximadoacao');

		$this->Doacao_model->ativo = 'SIM';

    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
    $this->form_validation->set_rules('doacao_tipo', 'Tipo de doação', 'required|max_length[60]');
    $this->form_validation->set_rules('doacao_data', 'Data doação', 'required|max_length[60]');
    $this->form_validation->set_rules('doacao_ultimadoacao', 'Data ultima doação', 'required|max_length[12]');
    $this->form_validation->set_rules('hemocentro_nome', 'Nome Hemocentro', 'required|max_length[60]|valid_email');

		if ($this->form_validation->run() == FALSE) {
			$this->carregarCadastroDoacao();
			return;
		} else {
			$this->Doacao_model->Salvar();
			redirect('Painel_entidade/carregarCadastroVaga/?aviso=1');
		}

	}

}
