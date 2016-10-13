<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_hemocentro extends MY_ControllerLogado {
	// chama home hemocentro
	public function index() {
		$id_hemocentro = $this->session->userdata('id_hemocentro');
		$data = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row());
		$this->load->view('hemocentro/cabecalho_hemocentro');
		$this->load->view('hemocentro/home_hemocentro_view', $data);

	}
	//sai do sistema
	function deslogar() {
		$this->session->sess_destroy();
		$this->load->view('cabecalho_view');
		$this->load->view('home_view_teste');
		$this->load->view('rodape_view');
	}
	// chama perfil do hemocentro
	public function carregarPerfil() {
		$id_hemocentro = $this->session->userdata('id_hemocentro');
		$data = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row());
		$this->load->view('hemocentro/cabecalho_hemocentro');
		$this->load->view('hemocentro/perfil_hemocentro_teste', $data);

	}
	//chama tela de editar perfil do hemocentro
	public function editaPerfilHemocentro() {
		$id_hemocentro = $this->session->userdata('id_hemocentro');
		$data = array("dadosHemocentro" => $this->hemocentro_model->getHemocentro($id_hemocentro)->row());
		$this->load->view('hemocentro/cabecalho_hemocentro');
		$this->load->view('configuracoes_Hemocentro_view', $data);

	}
	//chama tela de cadastro de estoque do hemocentro
	public function carregarCadastroEstoque() {
		$id_hemocentro = $this->session->userdata('id_hemocentro');
		$data = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row());
		$this->load->view('hemocentro/cabecalho_hemocentro');
		$this->load->view('hemocentro/cadastro_Estoque', $data);

	}
	//carrega estoque de sangue do hemocentro
	public function carregaMeuEstoque() {
		$id_hemocentro = $this->session->userdata('id_hemocentro');
		$data = array("dadosEstoque" => $this->Estoque_model->meuEstoque());
		$this->load->view('hemocentro/cabecalho_hemocentro');
		$this->load->view('hemocentro/meu_estoque_view', $data);

	}
	//cadastra estoque de sangue
	public function salvarEstoque() {
		$dados_estoque = array();
		//cria as variáveis
		$this->Estoque_model->tipo_a0 = $this->input->post('estoquetipo_a0');
		$this->Estoque_model->tipo_a1 = $this->input->post('estoquetipo_a1');
		$this->Estoque_model->tipo_b0 = $this->input->post('estoquetipo_b0');
		$this->Estoque_model->tipo_b1 = $this->input->post('estoquetipo_b1');
		$this->Estoque_model->tipo_ab0 = $this->input->post('estoquetipo_ab0');
		$this->Estoque_model->tipo_ab1 = $this->input->post('estoquetipo_ab1');
		$this->Estoque_model->tipo_o0 = $this->input->post('estoquetipo_o0');
		$this->Estoque_model->tipo_o1 = $this->input->post('estoquetipo_o1');
		// cria as restrições do formulario
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_rules('estoquetipo_a0', 'Tipo A-', 'required|max_length[120]');
		$this->form_validation->set_rules('estoquetipo_a1', 'Tipo A+', 'required|max_length[120]');
		$this->form_validation->set_rules('estoquetipo_b0', 'Tipo B-', 'required|max_length[120]');
		$this->form_validation->set_rules('estoquetipo_b1', 'Tipo B+', 'required|max_length[120]');
		$this->form_validation->set_rules('estoquetipo_ab0', 'Tipo AB-', 'required|max_length[120]');
		$this->form_validation->set_rules('estoquetipo_ab1', 'Tipo AB+', 'required|max_length[120]');
		$this->form_validation->set_rules('estoquetipo_o0', 'Tipo O-', 'required|max_length[120]');
		$this->form_validation->set_rules('estoquetipo_o1', 'Tipo O+', 'required|max_length[120]');
		//
		if ($this->form_validation->run() == FALSE) {
			$this->carregarCadastroEstoque();
			return;
		}
		// salva o estoque e carrega lista de estoque
		else {
			$this->Estoque_model->Salvar();
			redirect('Painel_hemocentro/carregaMeuEstoque');
		}
	}
	// atualiza perfil hemocentro
	function Atualizar() {

		$data = array();

		$data['senha'] = md5($this->input->post('hemocentro_senha'));
		$data['nome'] = $this ->input->post('hemocentro_nome');
		$data['telefone'] = $this->input->post('hemocentro_telefone');
		$data['email'] = $this->input->post('hemocentro_email');
		//$data['rua'] = $this->input->post('hemocentro_rua');
		$data['bairro'] = $this->input->post('hemocentro_bairro');
		$data['endereco'] = $this->input->post('hemocentro_endereco');
		$data['cidade'] = $this->input->post('hemocentro_cidade');
		$data['estado'] = $this->input->post('hemocentro_estado');
		$data['cep'] = $this->input->post('hemocentro_cep');
		//altera os dados
		$this->hemocentro_model->alterar($data);
		//atualiza tela com as alteraçõe
		$id_hemocentro = $this->session->userdata('id_hemocentro');
		$dados2 = array("dadosHemocentro" => $this->hemocentro_model->getHemocentro($id_hemocentro)->row());
		$this->load->view('hemocentro/cabecalho_hemocentro');
		$this->load->view('configuracoes_hemocentro_view', $dados2);

	}
	function AtualizarSenha() {

		$data = array();
		$data['senha'] = md5($this->input->post('hemocentro_senha'));
		$data['email'] = $this->input->post('hemocentro_email');

		$this->hemocentro_model->alterarSenha($data);

		$id_hemocentro = $this->session->userdata('id_hemocentro');
		$dados2 = array("dadosHemocentro" => $this->hemocentro_model->getHemocentro($id_hemocentro)->row());
		$this->load->view('hemocentro/cabecalho_hemocentro');
		$this->load->view('configuracoes_hemocentro_view', $dados2);


	}
}
