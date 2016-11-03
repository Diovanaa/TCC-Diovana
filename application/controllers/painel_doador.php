<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_Doador extends MY_ControllerLogado {

  public function cabecalho() { // Carrega o cabeçalho do Painel doador
    $id_doador = $this->session->userdata('id_doador');
    $data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
    $this->load->view('doador/cabecalho_doador', $data);
  }

  public function index() {//Carrega pagina Home do Doador
    $id_doador = $this->session->userdata('id_doador');
    $data = array("dadosDoacao" => $this->Doador_model->minhasDoacoes(),"dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
    $this->load->view('doador/cabecalho_doador');
    $this->load->view('doador/home_doador_view', $data);
  }

  public function carregarPerfil() {// Carrega o perfil do doador
    $id_doador = $this->session->userdata('id_doador');
    $data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row(), "dadosDoacao" => $this->Doador_model->minhasDoacoes());
    $this->load->view('doador/cabecalho_doador');
    $this->load->view('doador/perfil_doador_teste2', $data);
    $this->load->view('rodape_view');
  }

  function deslogar() {  // Sai do painel doador
    $this->session->sess_destroy();
    redirect('home/index');
  }

  public function carregarCadastroDoacao() {  //Carrega pagina de cadastro das doações
    $id_doador = $this->session->userdata('id_doador');
    $data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
    $this->load->view('doador/cabecalho_doador');
    $this->load->view('doador/cadastrar_doacoes', $data);
    $this->load->view('rodape_view');
  }

  public function carregaMinhasDoacoes() {//Carrega as minhas doações cadastradas
    $id_doador = $this->session->userdata('id_doador');
    $data = array("dadosDoacao" => $this->Doador_model->minhasDoacoes(), "dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
    $this->load->view('doador/cabecalho_doador');
    $this->load->view('doador/minhasDoacoes', $data);
  }


  public function editaPerfilDoador() {// chama tela de configurações/edições de dados do doador
    $id_doador = $this->session->userdata('id_doador');
    $data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
    $this->load->view('doador/cabecalho_doador');
    $this->load->view('doador/configuracoes_view', $data);
  }

  public function localizarHemocentros() {  //Chama tela de localizar hemocentros
    $id_doador = $this->session->userdata('id_doador');
    $id_hemocentro = $this->session->userdata('id_hemocentro');
    $data = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row(),
    "dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
    $this->load->view('doador/cabecalho_doador');
    $this->load->view('doador/localizar_hemocentro', $data);
  }

  public function doarAqui() {  //Carrega lista de Doadores para doar em um hemocentro específico cadastrado no sistema
    $id_doador = $this->session->userdata('id_doador');
    $data = array("dadosHemocentro" => $this->Doacao_model->procurarHemocentroParaDoar()->result(),
    "dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
    $this->load->view('doador/cabecalho_doador');
    $this->load->view('doador/doar_aqui', $data);
  }

  public function editarDoacoes($id_doacao) {//Chama tela de editar doações
    $id_doador = $this->session->userdata('id_doador');
    $data = array("dadosDoador" => $this->Doador_model->getDoador($id_doador)->row(),
    "dadosDoacao" => $this->Doador_model->getDoacao($id_doacao)->row());
    $this->load->view('doador/cabecalho_doador');
    $this->load->view('doador/editar_doacoes', $data);
  }

  public function salvarDoacao() {// Salva as doações
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

  function AtualizarDadosPessoais() {// Função para alterar os dados pessoais, como nome, telefone, data de nascimento, tipo sanguineo e sexo.
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

  function AtualizarEndereco() {// Função de atualizar endereço do doador
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

  function AtualizarSenha() {// Função de Atulizar email e senha do doador
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

  function AtualizarDoacao() { //Função de atualizar doações
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

  public function excluir($id_doacao, $id_doador) {  // Função de excluir doação
    $id_doador = $this->session->userdata('id_doador');
    $data = array(
      "excluir" => $this->Doacao_model->excluir($id_doador, $id_doacao)
    );
    redirect('painel_doador/carregaMinhasDoacoes/?alerta=1');
  }

  public function localizar() {//Função de localizar hemocentros por estado e tipo sanguineo
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

  public function salvarDoacaoMarcada() {// função salvar doações marcadas
    $dados_doacao_marcada = array();
    $this->DoacaoMarcada_model->tipo_doacao_marcada = $this->input->post('tipo_doacao_marcada');
    $this->DoacaoMarcada_model->data_doacao_marcada = $this->input->post('data_doacao_marcada');
    $this->DoacaoMarcada_model->turno_doacao_marcada = $this->input->post('turno_doacao_marcada');

    $this->DoacaoMarcada_model->id_hemocentro = $this->input->post('id_hemocentro');
    $this->DoacaoMarcada_model->id_doador = $session_id = $this->session->userdata('id_doador');
    $this->DoacaoMarcada_model->status_doacao_marcada = 'Aguardando Confirmação';

    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
    $this->form_validation->set_rules('tipo_doacao_marcada', 'Tipo da Doacao Marcada', 'required|max_length[120]');
    $this->form_validation->set_rules('data_doacao_marcada', 'Data doação Marcada', 'required|max_length[60]');
    $this->form_validation->set_rules('turno_doacao_marcada', 'Turno da doação marcada', 'required|max_length[12]');


    if ($this->form_validation->run() == FALSE) {
      $this->doar();
      return;
    } else {
      $this->DoacaoMarcada_model->Salvar($dados_doacao_marcada);
      redirect('Painel_doador/doarAqui/?alerta=2');
    }
  }
  public function carregaMinhasDoacoesMarcadas() {//Carrega pagina de cadastro das doações Marcadas
    $id_doador = $this->session->userdata('id_doador');
    $data = array("dadosDoacaoMarcada" => $this->Doador_model->minhasDoacoesMarcadas(), "dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
    $this->load->view('doador/cabecalho_doador');
    $this->load->view('doador/home_doador_view', $data);
  }

  public function doar() {
    $id_hemocentro = $this->input->post('id_hemocentro');
    $id_doador = $this->session->userdata('id_doador');
    $data = array("dadosHemocentro" => $this->Hemocentro_model->getHemocentro($id_hemocentro)->row(),
    "dadosDoador" => $this->Doador_model->getDoador($id_doador)->row());
    $this->load->view('doador/cabecalho_doador');
    $this->load->view('doador/doar', $data);

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
