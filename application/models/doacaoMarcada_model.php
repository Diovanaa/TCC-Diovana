<?php

class DoacaoMarcada_model extends CI_Model {

  public $id_doacao_marcada;
  public $id_doador;
  public $id_hemocentro;
  public $tipo_doacao_marcada;
  public $data_doacao_marcada;
  public $turno_doacao_marcada;
  public $status_doacao_marcada;

  function __construct() {
    parent::__construct();
  }

  public function Salvar($dados){
    return $this->db->insert('doacao_marcada', $this);
  }
  public function excluir($id_doador, $id_doacao_marcada){

    $this->db->where('id_doador', $id_doador);
    $this->db->where('id_doacao_marcada', $id_doacao_marcada);

    return	$this->db->delete('doacao_marcada');

  }

  function getDoacaoMarcada(){
    $id_doador = $this->session->userdata('id_doador');
    $this->db
    ->select("*")
    ->from('doador')
    ->join('doacao_marcada', 'doador.id_doador = doacao_marcada.id_doador')
    ->where('id_doacao_marcada', $id_doacao_marcada);
    return $query = $this->db->get()->result();
  }


  public function procurarHemocentroParaDoar(){
    $this->db
    ->select('*')
    ->from('hemocentro');
    return $this->db->get();
  }

  public function aceitarOuRecusar($data, $id_doacao_marcada){
    $this->db->where('id_doacao_marcada', $id_doacao_marcada);
    $this->db->set($data);
    return $this->db->update('doacao_marcada');

  }

  public function getDoacaoMarcadaCerta($id_doacao_marcada){
    $this->db->select('*')
    ->from('doacao_marcada')
    ->where('id_doacao_marcada', $id_doacao_marcada);
    return $query = $this->db->get()->row();
  }
}
