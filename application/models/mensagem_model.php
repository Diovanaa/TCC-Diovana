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

}
