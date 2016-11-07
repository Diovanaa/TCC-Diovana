<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doador extends CI_Controller {

	public function index() {
		$this->load->view('cabecalho_view');
		$this->load->view('cadastro_doador_view');
	}
	public function carregarLogin(){
		$this->load->view('login/loginDoador');
	}
	//public function deslogarHemocentro() {
	//		$this->session->sess_destroy();
	//	$this->load->view('home2');
	//}
	public function Salvar() {
		$dados = array();

		$this->db->select('email');
		$this->db->where('email', $this->input->post('doador_email'));
		$retorno = $this->db->get('Doador')->num_rows();
		//verifica se já existe um email igual cadastrado, caso exista vai mostrar a mensagem
		//caso não o cadastro será realizado
		if ($retorno > 0) {
			redirect('Doador/index/?alerta=2');
		} else {

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			$this->form_validation->set_rules('doador_nome', 'Nome', 'required|max_length[60]');
			$this->form_validation->set_rules('doador_telefone', 'Telefone', 'required|max_length[12]');
			$this->form_validation->set_rules('doador_email', 'E-mail', 'required|max_length[60]|valid_email');
			$this->form_validation->set_rules('doador_senha', 'Senha', 'required|max_length[30]|min_length[8]');
			$this->form_validation->set_rules('doador_data_nascimento', 'Data de Nascimento', 'required|max_length[12]');
			$this->form_validation->set_rules('doador_tipo_sanguineo', 'Tipo Sanguíneo', 'required|max_length[3]');
			$this->form_validation->set_rules('doador_sexo', 'Sexo', 'required|max_length[20]');
			$this->form_validation->set_rules('doador_endereco', 'Endereco', 'required|max_length[60]');
			$this->form_validation->set_rules('doador_estado', 'Estado', 'required|max_length[60]');
			$this->form_validation->set_rules('doador_cidade', 'Cidade', 'required|max_length[60]');



			if ($this->form_validation->run() == FALSE) {
				$this->index();
				return;
			} else {
				$this->Doador_model->nome = $this->input->post('doador_nome');
				$this->Doador_model->telefone = $this->input->post('doador_telefone');
				$this->Doador_model->email = $this->input->post('doador_email');
				$this->Doador_model->senha = md5($this->input->post('doador_senha'));
				$this->Doador_model->data_nascimento = $this->input->post('doador_data_nascimento');
				$this->Doador_model->tipo_sanguineo = $this->input->post('doador_tipo_sanguineo');
				$this->Doador_model->sexo = $this->input->post('doador_sexo');
				$this->Doador_model->endereco = $this->input->post('doador_endereco');
				$this->Doador_model->estado = $this->input->post('doador_estado');
				$this->Doador_model->cidade = $this->input->post('doador_cidade');
			

				$this->Doador_model->Salvar();

				redirect('login/loginDoador/?alerta=3');
			}

		}
	}

	public function logindoador() {

		//pega os dados vindos da view de login
		$doador_email = $this->input->post('doador_email');
		$doador_senha = $this->input->post('doador_senha');

		//fazendo a validação do formulario de login
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_rules('doador_email', 'email', 'required|max_length[60]');
		$this->form_validation->set_rules('doador_senha', 'Senha', 'required|max_length[60]');
		// caso ocorra erro no login
		if ($this->form_validation->run() == FALSE) {
			$this->carregarLogin();
			return;
		}

		//seleciona os dados na tabela de doador
		$this->db->select("*")
		->from("Doador")
		->where("email", $doador_email)
		->where("senha", md5($doador_senha));

		$dadosDoador = $this->db->get();

		//se tiver um igual vai fazer o login e passar o id
		if ($dadosDoador->num_rows() > 0) {
			$doador = $dadosDoador -> row();

			$this->session->set_userdata('usuarioLogado', TRUE);
			$this->session->set_userdata('id_doador', $doador->id_doador);

			// direciona para o modulo doador
			redirect('Painel_doador/index');

		} else {
			//se não tiver login e senha certo vai cair aqui
			redirect('/Login/loginDoador/?alerta=1');

		}


	}

}
