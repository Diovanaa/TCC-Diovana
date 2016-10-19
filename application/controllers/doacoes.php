<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Doacoes extends CI_Controller {

    public function index() {
        $this->load->view('cabecalho_view');
        $this->load->view('doacoes_view');
    }

    public function carregarCadastroDoacao() {
        //	$id_hemocentro = $this->session->userdata('id_hemocentro');
        $id_doador = $this->session->userdata('id_doador');
        //$data = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row());
        $data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
        $this->load->view('cabecalho_view');
        $this->load->view('minhasDoacoes', $data);
    }

    public function salvar() {
        $dados_doacoes = array();

        $this->Doacao_model->doacao_dia = $this->input->post('doacao_dia');
        $this->Doacao_model->doacao_mes = $this->input->post('doacao_mes');
        $this->Doacao_model->doacao_ano = $this->input->post('doacao_ano');
        $this->Doacao_model->ultima_dia = $this->input->post('ultima_dia');
        $this->Doacao_model->ultima_mes = $this->input->post('ultima_mes');
        $this->Doacao_model->ultima_ano = $this->input->post('ultima_ano');
        $this->Doacao_model->tipo_doacao = $this->input->post('doacao_tipo');
        $this->Doacao_model->hemocentro_nome = $this->input->post('hemocentro_nome');
        //$this->Doacao_model->id_hemocentro = $session_id = $this->session->userdata('id_hemocentro');
        $this->Doacao_model->id_doador = $session_id = $this->session->userdata('id_doador');
        $this->Doacao_model->proxima_dia = $this->input->post('proxima_dia');
        $this->Doacao_model->proxima_mes = $this->input->post('proxima_mes');

        $this->Doacao_model->ativo = 'SIM';

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('doacao_tipo', 'Tipo de doação', 'required|max_length[60]');
        $this->form_validation->set_rules('doacao_dia', 'Data doação', 'required|max_length[60]');
        $this->form_validation->set_rules('doacao_mes', 'Data doação', 'required|max_length[60]');
        $this->form_validation->set_rules('doacao_ano', 'Data doação', 'required|max_length[60]');
        $this->form_validation->set_rules('ultima_dia', 'Data ultima doação', 'required|max_length[12]');
        $this->form_validation->set_rules('ultima_mes', 'Data doação', 'required|max_length[60]');
        $this->form_validation->set_rules('ultima_ano', 'Data doação', 'required|max_length[60]');              
        $this->form_validation->set_rules('hemocentro_nome', 'Nome Hemocentro', 'required|max_length[60]|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->carregarCadastroDoacao();
            return;
        } else {
            $this->Doacao_model->Salvar();
            redirect('Painel_doador/carregaMinhasDoacoes');
        }
    }

}
