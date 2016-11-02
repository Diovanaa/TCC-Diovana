<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hemocentro extends CI_Controller {

  public function index() {
    $this->load->view('cabecalho_view');
    $this->load->view('cadastro_hemocentro_view');
  }

  public function carregarLogin() {
    $this->load->view('login/loginHemocentro');
  }

  public function deslogarHemocentro() {
    $this->session->sess_destroy();
    $this->load->view('home2');
  }

  public function salvar_hemocentro() {
    $dados = array();

    $this->db->select('email');
    $this->db->where('email', $this->input->post('hemocentro_email'));
    $retorno = $this->db->get('Hemocentro')->num_rows();
    //verifica se já existe um email igual cadastrado, caso exista vai mostrar a mensagem
    //caso não o cadastro será realizado
    if ($retorno > 0) {
      redirect('Hemocentro/index/?alerta=2');
    } else {

      $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
      $this->form_validation->set_rules('hemocentro_nome', 'Nome', 'required|max_length[120]');
      $this->form_validation->set_rules('hemocentro_telefone', 'Telefone', 'required|max_length[120]');
      $this->form_validation->set_rules('hemocentro_email', 'Email', 'required|max_length[120]');
      $this->form_validation->set_rules('hemocentro_senha', 'Senha', 'required|max_length[120]');
      $this->form_validation->set_rules('hemocentro_endereco', 'Endereco', 'required|max_length[120]');
      $this->form_validation->set_rules('hemocentro_bairro', 'Bairro', 'required|max_length[120]');
      $this->form_validation->set_rules('hemocentro_cidade', 'Cidade', 'required|max_length[120]');
      $this->form_validation->set_rules('hemocentro_cep', 'CEP', 'required|max_length[120]');
      $this->form_validation->set_rules('hemocentro_estado', 'Estado', 'required|max_length[120]');


      if ($this->form_validation->run() == FALSE) {
        $this->index();
        return;
      } else {
        $this->Hemocentro_model->nome = $this->input->post('hemocentro_nome');
        $this->Hemocentro_model->telefone = $this->input->post('hemocentro_telefone');
        $this->Hemocentro_model->email = $this->input->post('hemocentro_email');
        $this->Hemocentro_model->senha = md5($this->input->post('hemocentro_senha'));
        $this->Hemocentro_model->endereco = $this->input->post('hemocentro_endereco');
        $this->Hemocentro_model->bairro = $this->input->post('hemocentro_bairro');
        $this->Hemocentro_model->cidade = $this->input->post('hemocentro_cidade');
        $this->Hemocentro_model->estado = $this->input->post('hemocentro_estado');
        $this->Hemocentro_model->cep = $this->input->post('hemocentro_cep');
        $this->Hemocentro_model->Salvar();

        redirect('login/loginHemocentro');
      }
    }
  }

  public function loginhemocentro() {

    //pega os dados vindos da view de login
    $hemocentro_email = $this->input->post('hemocentro_email');
    $hemocentro_senha = $this->input->post('hemocentro_senha');
    //fazendo a validação do formulario de login
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
    $this->form_validation->set_rules('hemocentro_email', 'email', 'required|max_length[120]');
    $this->form_validation->set_rules('hemocentro_senha', 'senha', 'required|max_length[120]');

    if ($this->form_validation->run() == FALSE) {
      $this->carregarLogin();
      return;
    }

    //seleciona os dados na tabela do hemocentro
    $this->db->select("*")
    ->from("Hemocentro")
    ->where("email", $hemocentro_email)
    ->where("senha", md5($hemocentro_senha));

    $dadosHemocentro = $this->db->get();


    //se tiver um igual vai fazer o login e passar o id
    if ($dadosHemocentro->num_rows() > 0) {
      $hemocentro = $dadosHemocentro->row();
      $this->session->set_userdata('usuarioLogado', TRUE);
      $this->session->set_userdata('id_hemocentro', $hemocentro->id_hemocentro);

      redirect('Painel_hemocentro/index');
    } else {
      //se não tiver login e senha certo vai cair aqui
      redirect('/Login/loginHemocentro/?alerta=1');
    }
  }

}
