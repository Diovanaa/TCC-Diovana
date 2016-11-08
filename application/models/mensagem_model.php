<?php

class Mensagem_model extends CI_Model {

  public $id_mensagem;
  public $id_doador;
  public $id_hemocentro;
  public $mensagem;

  function __construct() {
    parent::__construct();
  }

  public function Salvar(){
    return $this->db->insert('mensagem', $this);
  }
  function  listarmensagens(){
    $this->db
		->select("*")
		->from("mensagem")
		->join("hemocentro", "mensagem.id_hemocentro = hemocentro.id_hemocentro")
    ->where('id_doador', $this->session->userdata('id_doador'));
		return $this->db->get()->result();
  }
  function  getDoador($id_doador){
    $this->db
    ->select("*")
    ->from("Doador")
    ->where('id_doador', $id_doador);
    return $this->db->get();
  }

  public function excluir($id_doador, $id_mensagem) {
    $id_doador = $this->session->userdata('id_doador');
    $this->db->where('id_doador', $id_doador);
    $this->db->where('id_mensagem', $id_mensagem);
    $this->db->delete('mensagem');
  }

}
