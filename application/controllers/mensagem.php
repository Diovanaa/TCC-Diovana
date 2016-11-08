<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mensagem extends MY_ControllerLogado {


public function salvarMensagem() {// Salva as Mensagens
  $dados_mensagem = array();

  $this->Mensagem_model->mensagem = $this->input->post('mensagem');
  $this->Mensagem_model->id_doador = $this->input->post('id_doador');
  $this->Mensagem_model->id_hemocentro = $session_id = $this->session->userdata('id_hemocentro');

  $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
  $this->form_validation->set_rules('mensagem', 'Mensagem para doador', 'required|max_length[700]');

  if ($this->form_validation->run() == FALSE) {
    $this->carregarEnvioMensagem();
    return;
  } else {
    $this->Mensagem_model->Salvar();
    redirect('Painel_hemocentro/localizarDoadores/?alerta=2');
  }
}
public function carregarEnvioMensagem() {
  $id_hemocentro = $this->session->userdata('id_hemocentro');
  $id_doador = $this->input->post('id_doador');
  $data = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row(),
  "dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
  $this->load->view('hemocentro/cabecalho_hemocentro');
  $this->load->view('hemocentro/enviar_mensagem', $data);

}
}
