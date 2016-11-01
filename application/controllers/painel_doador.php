<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_Doador extends MY_ControllerLogado {
    // Carrega o cabeçalho do Painel doador
    public function cabecalho() {
        $id_doador = $this->session->userdata('id_doador');
        $data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
        $this->load->view('doador/cabecalho_doador', $data);
    }
    //Carrega pagina Home do Doador
    public function index() {
        $id_doador = $this->session->userdata('id_doador');
        $data = array("dadosDoacao" => $this->Doador_model->minhasDoacoes(),"dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
        $this->load->view('doador/cabecalho_doador');
        $this->load->view('doador/home_doador_view', $data);
    }
    // Carrega o perfil do doador
    public function carregarPerfil() {
        $id_doador = $this->session->userdata('id_doador');
        $data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row(), "dadosDoacao" => $this->Doador_model->minhasDoacoes());
        $this->load->view('doador/cabecalho_doador');
        $this->load->view('doador/perfil_doador_teste2', $data);
        $this->load->view('rodape_view');
    }
    // Sai do painel doador
    function deslogar() {
        $this->session->sess_destroy();
        $this->load->view('cabecalho_view');
        $this->load->view('home_view_teste');
    }
    //Carrega pagina de cadastro das doações
    public function carregarCadastroDoacao() {
        $id_doador = $this->session->userdata('id_doador');
        $data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
        $this->load->view('doador/cabecalho_doador');
        $this->load->view('doador/cadastrar_doacoes', $data);
        $this->load->view('rodape_view');
    }
    //Carrega as minhas doações cadastradas
  public function carregaMinhasDoacoes() {
      $id_doador = $this->session->userdata('id_doador');
      $data = array("dadosDoacao" => $this->Doador_model->minhasDoacoes(), "dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
      $this->load->view('doador/cabecalho_doador');
      $this->load->view('doador/minhasDoacoes', $data);
  }
  // chama tela de configurações/edições de dados do doador
public function editaPerfilDoador() {
    $id_doador = $this->session->userdata('id_doador');
    $data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
    $this->load->view('doador/cabecalho_doador');
    $this->load->view('doador/configuracoes_view', $data);
}
//Chama tela de localizar hemocentros
public function localizarHemocentros() {
    $id_doador = $this->session->userdata('id_doador');
    $id_hemocentro = $this->session->userdata('id_hemocentro');
    $data = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row(),
        "dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
    $this->load->view('doador/cabecalho_doador');
    $this->load->view('doador/localizar_hemocentro', $data);
}
//Carrega lista de Doadores para doar em um hemocentro específico cadastrado no sistema
public function doarAqui() {
  $id_doador = $this->session->userdata('id_doador');
  $data = array("dadosHemocentro" => $this->Doacao_model->procurarHemocentroParaDoar()->result(),
      "dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
  $this->load->view('doador/cabecalho_doador');
  $this->load->view('doador/doar_aqui', $data);
}
//Chama tela de editar doações
public function editarDoacoes($id_doacao) {
    $id_doador = $this->session->userdata('id_doador');
    $data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row(),
        "dadosDoacao" => $this->Doador_model->getDoacao($id_doacao)->row());
    $this->load->view('doador/cabecalho_doador');
    $this->load->view('doador/editar_doacoes', $data);
}
// Salva as doações
public function salvarDoacao() {
        $dados_doacao = array();
        $this->Doacao_model->tipo_doacao = $this->input->post('doacao_tipodoacao');
        $this->Doacao_model->data_doacao = $this->input->post('data_doacao');
        $this->Doacao_model->data_ultima = $this->input->post('data_ultima');
        $this->Doacao_model->data_proxima = $this->input->post('data_proxima');
        $this->Doacao_model->hemocentro_nome = $this->input->post('hemocentro_nome');
        $this->Doacao_model->id_doador = $session_id = $this->session->userdata('id_doador');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('doacao_tipodoacao', 'Tipo da Doacao', 'required|max_length[120]');
        $this->form_validation->set_rules('data_doacao', 'Data doação', 'required|max_length[60]');
        $this->form_validation->set_rules('data_ultima', 'Data ultima doação', 'required|max_length[12]');
        $this->form_validation->set_rules('hemocentro_nome', 'Nome do Hemocentro', 'required|max_length[120]');

        if ($this->form_validation->run() == FALSE) {
            $this->carregarCadastroDoacao();
            return;
        } else {
            $this->Doacao_model->Salvar();
            redirect('Painel_doador/carregaMinhasDoacoes/?alerta=2');
        }
    }
// Função para alterar os dados pessoais, como nome, telefone, data de nascimento, tipo sanguineo e sexo.
function AtualizarDadosPessoais() {
        $data = array();
        $data['nome'] = $this->input->post('doador_nome');
        $data['telefone'] = $this->input->post('doador_telefone');
        $data['data_nascimento'] = $this->input->post('doador_data_nascimento');
        $data['tipo_sanguineo'] = $this->input->post('doador_tipo_sanguineo');
        $data['sexo'] = $this->input->post('doador_sexo');

        $this->Doador_model->alterarDadosPessoais($data);

        $id_doador = $this->session->userdata('id_doador');
        $dados2 = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
        $this->load->view('doador/cabecalho_doador');
        $this->load->view('doador/configuracoes_view', $dados2);
    }
// Função de atualizar endereço do doador
function AtualizarEndereco() {
        $data = array();
        $data['endereco'] = $this->input->post('doador_endereco');
        $data['cidade'] = $this->input->post('doador_cidade');
        $data['estado'] = $this->input->post('doador_estado');

        $this->Doador_model->alterarEndereco($data);

        $id_doador = $this->session->userdata('id_doador');
        $dados2 = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
        $this->load->view('doador/cabecalho_doador');
        $this->load->view('doador/configuracoes_view', $dados2);
    }
// Função de Atulizar email e senha do doador
function AtualizarSenha() {
        $data = array();
        $data['senha'] = md5($this->input->post('doador_senha'));
        $data['email'] = $this->input->post('doador_email');

        $this->Doador_model->alterarSenha($data);

        $id_doador = $this->session->userdata('id_doador');
        $dados2 = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
        $this->load->view('doador/cabecalho_doador');
        $this->load->view('doador/configuracoes_view', $dados2);
        $this->load->view('rodape_view');
    }
//Função de atualizar doações
function AtualizarDoacao() {
        $data = array();
        $data['hemocentro_nome'] = $this->input->post('hemocentro_nome');
        $data['tipo_doacao'] = $this->input->post('doacao_tipodoacao');
        $data['data_doacao'] = $this->input->post('data_doacao');
        $data['data_ultima'] = $this->input->post('data_ultima');
        $id_doador = $this->session->userdata('id_doador');
        $id_doacao = $this->input->post('id_doacao');

        $this->Doador_model->alterarDoacao($data, $id_doacao);
        $dados2 = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row(),
        "dadosDoacao" => $this->Doador_model->getDoacao($id_doacao)->row());
        $this->load->view('doador/cabecalho_doador');
        $this->load->view('doador/editar_doacoes', $dados2);
    }
// dunção de excluir doação
public function excluir($id_doacao, $id_doador) {
        $id_doador = $this->session->userdata('id_doador');
        $data = array(
            "excluir" => $this->Doacao_model->excluir($id_doador, $id_doacao)
        );
        redirect('painel_doador/carregaMinhasDoacoes/?alerta=1');
    }
    //Função de localizar hemocentros por estado e tipo sanguineo
    public function localizar() {
            $teste = $this->input->post('busca');
            $this->db->select('*')->from('hemocentro')
                    ->group_start()
                    ->where('estado', $this->input->post('busca'))
                    ->or_group_start()
                    ->where('cidade', $this->input->post('busca'))
                    ->group_end()
                    ->group_end()
                    ->get();
            $retorno = $this->db->get('hemocentro')->num_rows();
            if ($retorno == 0) {
                redirect('painel_doador/localizarHemocentros/?aviso=2');
            } else {
                $id_doador = $this->session->userdata('id_doador');
                $data = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentroPorEstado($teste),
                    "dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
                $this->load->view('doador/cabecalho_doador');
                $this->load->view('doador/localizar_hemocentro', $data);
            }
        }

// ainda nao fiz essa função
public function contador($id_doacao, $id_doador){

		$id_doador = $this->session->userdata('id_doador');
		$data_atual = date('d-m-Y');

		echo $data_atual;

		$this->db->select('data_ultima')
		->from('Doacao')
		->where('id_doacao', $id_doacao);

		$teste = $this->db->get()->result();

		foreach ($teste as $row) {
			$data_ultima = $row->data_ultima;
			echo $data_ultima;

			$diferenca = strtotime($data_ultima) - strtotime($data_atual);
			$dias = floor($diferenca / (60 * 60 * 24));

			if ($dias < 2) {
				redirect('painel_doador/index/?aviso=4');
			} else {
				$data = array(

				);
				redirect('painel_doador/index/?aviso=3');
			}

		}
	}

}
