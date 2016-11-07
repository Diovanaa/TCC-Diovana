<?php

class Doador_model extends CI_Model {

  public $id_doador;
  public $nome;
  public $email;
  public $telefone;
  public $senha;
  public $data_nascimento;
  public $tipo_sanguineo;
  public $sexo;
  public $endereco;
  public $estado;
  public $cidade;


  function __construct() {
    parent::__construct();
  }

  //inserindo no banco de dados
  public function Salvar() {
    return $this->db->insert('Doador', $this);
  }

  function getDoadorPorTipoSanguineo($teste) {
    $this->db
    ->select('*')
    ->from('doador')
    ->like('tipo_sanguineo', $teste)
    ->or_like('estado', $teste)
    ->order_by("doador.nome", "asc");
    return $qr = $this->db->get()->result();
  }

  //buscando todas as minhas doações
  public function minhasDoacoes() {
    $id_doador = $this->session->userdata('id_doador');
    $this->db
    ->select("*")
    ->from("doacao")
    ->join('doador', 'doacao.id_doador = doador.id_doador')
    ->where('doador.id_doador', $id_doador);
    return $this->db->get()->result();
  }
  function minhasDoacoesMarcadas(){

		$this->db
		->select("*")
		->from("doacao_marcada")
		->join("hemocentro", "doacao_marcada.id_hemocentro = hemocentro.id_hemocentro")
		->where('id_doador', $this->session->userdata('id_doador'));
		return $this->db->get()->result();

	}

  //excluir doador e suas doações
  public function excluirDoador($id_doador) {
    $id_doador = $this->session->userdata('id_doador');
    $this->db->where('id_doador', $id_doador);
    $this->db->where('id_doacao', $id_doacao);
    $this->db->delete('doador', 'doacao');
  }

  public function excluir($id_doador, $id_doacao) {
    $id_doador = $this->session->userdata('id_doador');
    $this->db->where('id_doador', $id_doador);
    $this->db->where('id_doacao', $id_doacao);
    $this->db->delete('doacao');
  }

  //mostrando tudo do doador
  function getDoador($doador) {
    $id_doador = $this->session->userdata('id_doador');
    $this->db
    ->select("*")
    ->from("Doador")
    ->where('id_doador', $id_doador);
    return $this->db->get();
  }

  function getDoadores($teste) {

    $this->db
    ->select('*')
    ->from('doador')
    ->like('tipo_sanguineo', $teste)
    ->where('id_doador', $id_doador);
    return $qr = $this->db->get()->result();
  }

  function getDoacao($doacao) {
    $this->db
    ->select("*")
    ->from("Doacao")
    ->where('id_doacao', $doacao);
    return $this->db->get();
  }

  function alterarDoador($data) {
    $id_doador = $this->session->userdata('id_doador');
    $this->db->where('id_doador', $id_doador);
    $this->db->set($data);
    return $this->db->update('Doador');
  }

  function alterarDoacao($data, $id_doacao) {
    $id_doador = $this->session->userdata('id_doador');
    $this->db->where('id_doador', $id_doador);
    $this->db->where('id_doacao', $id_doacao);
    $this->db->set($data);
    return $this->db->update('Doacao');
  }

  function alterarSenha($data) {
    $id_doador = $this->session->userdata('id_doador');
    $this->db->where('id_doador', $id_doador);
    $this->db->set($data);
    return $this->db->update('Doador');
  }

  function alterarDadosPessoais($data) {
    $id_doador = $this->session->userdata('id_doador');
    $this->db->where('id_doador', $id_doador);
    $this->db->set($data);
    return $this->db->update('Doador');
  }

  function alterarEndereco($data) {
    $id_doador = $this->session->userdata('id_doador');
    $this->db->where('id_doador', $id_doador);
    $this->db->set($data);
    return $this->db->update('Doador');
  }

}
