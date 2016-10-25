<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_hemocentro extends MY_ControllerLogado {

    public function index() {

        $id_hemocentro = $this->session->userdata('id_hemocentro');
        $data = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row());
        $this->load->view('hemocentro/cabecalho_hemocentro');
        $this->load->view('hemocentro/home_hemocentro_view', $data);
      }
      public function teste_procurar(){
      		$id_doador = $this->session->userdata('id_doador');
      		$data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row(),
        "dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row());
      		$this->load->view('hemocentro/cabecalho_hemocentro');
      		$this->load->view('hemocentro/home_hemocentro_view', $data);
      	}

    function deslogar() {
        $this->session->sess_destroy();
        $this->load->view('cabecalho_view');
        $this->load->view('home_view_teste');
      }
    public function procurarDoadoresPorTipoSanguineo(){

		$teste = $this->input->post('input_busca');

		$this->db->select('*');
		$this->db->like('tipo_sanguineo', $this->input->post('input_busca'));
		$this->db->where('id_doador', $id_doador);
		$retorno = $this->db->get('doador')->num_rows();

		if ($retorno == 0) {
			redirect('Painel_hemocentro/teste_procurar/?aviso=2');
		}

		else {
			$id_doador = $this->session->userdata('id_doador');
			$data = array("dadosDoador" => $this->Doador_model->getDoadores($id_doador)->row(),
      "dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row());
			$this->load->view('hemocentro/cabecalho_hemocentro');
			$this->load->view('hemocentro/home_hemocentro_view', $data);
		}


	}

    public function carregarPerfil() {
        $id_hemocentro = $this->session->userdata('id_hemocentro');
        $data = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row(),
            "dadosEstoque" => $this->Hemocentro_model->meuEstoque());
        $this->load->view('hemocentro/cabecalho_hemocentro');
        $this->load->view('hemocentro/perfil_hemocentro_teste', $data);
      }

    public function carregaMeuEstoque() {
        $id_hemocentro = $this->session->userdata('id_hemocentro');
        $data = array("dadosEstoque" => $this->Hemocentro_model->meuEstoque(), "dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row());

        $this->load->view('hemocentro/cabecalho_hemocentro');
        $this->load->view('hemocentro/meu_estoque_view', $data);
      }

    public function editaPerfilHemocentro() {
        $id_hemocentro = $this->session->userdata('id_hemocentro');
        $data = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row());
        $this->load->view('hemocentro/cabecalho_hemocentro');
        $this->load->view('hemocentro/configuracoes_hemocentro_view', $data);
      }

    public function carregarCadastroEstoque() {
        $id_hemocentro = $this->session->userdata('id_hemocentro');
        $data = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row());
        $this->load->view('hemocentro/cabecalho_hemocentro');
        $this->load->view('hemocentro/cadastro_Estoque', $data);
    }

    public function salvarEstoque() {
        $dados_estoque = array();
        $this->Estoque_model->tipo_a0 = $this->input->post('estoquetipo_a0');
        $this->Estoque_model->tipo_a1 = $this->input->post('estoquetipo_a1');
        $this->Estoque_model->tipo_b0 = $this->input->post('estoquetipo_b0');
        $this->Estoque_model->tipo_b1 = $this->input->post('estoquetipo_b1');
        $this->Estoque_model->tipo_ab0 = $this->input->post('estoquetipo_ab0');
        $this->Estoque_model->tipo_ab1 = $this->input->post('estoquetipo_ab1');
        $this->Estoque_model->tipo_o0 = $this->input->post('estoquetipo_o0');
        $this->Estoque_model->tipo_o1 = $this->input->post('estoquetipo_o1');
        $this->Estoque_model->id_hemocentro = $session_id = $this->session->userdata('id_hemocentro');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('estoquetipo_a0', 'Tipo A-', 'required|max_length[120]');
        $this->form_validation->set_rules('estoquetipo_a1', 'Tipo A+', 'required|max_length[120]');
        $this->form_validation->set_rules('estoquetipo_b0', 'Tipo B-', 'required|max_length[120]');
        $this->form_validation->set_rules('estoquetipo_b1', 'Tipo B+', 'required|max_length[120]');
        $this->form_validation->set_rules('estoquetipo_ab0', 'Tipo AB-', 'required|max_length[120]');
        $this->form_validation->set_rules('estoquetipo_ab1', 'Tipo AB+', 'required|max_length[120]');
        $this->form_validation->set_rules('estoquetipo_o0', 'Tipo O-', 'required|max_length[120]');
        $this->form_validation->set_rules('estoquetipo_o1', 'Tipo O+', 'required|max_length[120]');

        if ($this->form_validation->run() == FALSE) {
            $this->carregarCadastroEstoque();
            return;
        } else {
            $this->Estoque_model->Salvar();
            redirect('Painel_hemocentro/carregaMeuEstoque/?alerta=2');
        }
    }

    function Atualizar() {

        $data = array();
        $data['nome'] = $this->input->post('hemocentro_nome');
        $data['telefone'] = $this->input->post('hemocentro_telefone');
        $data['bairro'] = $this->input->post('hemocentro_bairro');
        $data['endereco'] = $this->input->post('hemocentro_endereco');
        $data['cidade'] = $this->input->post('hemocentro_cidade');
        $data['estado'] = $this->input->post('hemocentro_estado');
        $data['cep'] = $this->input->post('hemocentro_cep');

        $this->Hemocentro_model->alterar($data);

        $id_hemocentro = $this->session->userdata('id_hemocentro');
        $dados2 = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row());
        $this->load->view('hemocentro/cabecalho_hemocentro');
        $this->load->view('hemocentro/configuracoes_hemocentro_view', $dados2);
    }

    function AtualizarSenha() {

        $data = array();
        $data['senha'] = md5($this->input->post('hemocentro_senha'));
        $data['email'] = $this->input->post('hemocentro_email');

        $this->Hemocentro_model->alterarSenha($data);

        $id_hemocentro = $this->session->userdata('id_hemocentro');
        $dados2 = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row());
        $this->load->view('hemocentro/cabecalho_hemocentro');
        $this->load->view('hemocentro/configuracoes_hemocentro_view', $dados2);
      }

    function AtualizarEstoque() {

        $data = array();
        $data['tipo_a0'] = $this->input->post('estoquetipo_a0');
        $data['tipo_a1'] = $this->input->post('estoquetipo_a1');
        $data['tipo_b0'] = $this->input->post('estoquetipo_b0');
        $data['tipo_b1'] = $this->input->post('estoquetipo_b1');
        $data['tipo_ab0'] = $this->input->post('estoquetipo_ab0');
        $data['tipo_ab1'] = $this->input->post('estoquetipo_ab1');
        $data['tipo_o0'] = $this->input->post('estoquetipo_o0');
        $data['tipo_o1'] = $this->input->post('estoquetipo_o1');

        $this->hemocentro_model->alterarEstoque($data);

        $id_hemocentro = $this->session->userdata('id_hemocentro');
        $dados2 = array("dadosEstoque" => $this->hemocentro_model->getEstoque($id_hemocentro)->row());
        $this->load->view('hemocentro/cabecalho_hemocentro');
        $this->load->view('hemocentro/editar_estoque_view', $dados2);
    }

    public function excluir($id_estoque, $id_hemocentro) {

        $id_hemocentro = $this->session->userdata('id_hemocentro');
        $data = array(
            "excluir" => $this->Estoque_model->excluir($id_hemocentro, $id_estoque)
        );

        redirect('Painel_hemocentro/carregaMeuEstoque/?alerta=1');
    }

}
