<?php

class Doacao_model extends CI_Model {

    public $id_doacao;
    public $id_doador;
    public $tipo_doacao;
  	public $data_doacao;
    public $data_ultima;
    public $data_proxima;
    public $hemocentro_nome;

    function __construct() {
        parent::__construct();
    }

    public function Salvar(){
       return $this->db->insert('Doacao', $this);
   }

  // function doacoes(){
  //   	$id_doacao = $this->session->userdata('id_doacao');
  //    $this->db
  //   ->select("*")
  //   ->from('Doacao')
  //   ->join('Doador', 'doacao.id_doacao = doador.id_doador')
//     ->where('id_doador', $id_doador);
  //   return $query = $this->db->get()->result();
  // }

  public function excluir($id_doador, $id_doacao){

 	  $this->db->where('id_doador', $id_doador);
 	  $this->db->where('id_doacao', $id_doacao);
    return	$this->db->delete('doacao');

 }

 public function procurarHemocentroParaDoar(){
   $this->db
   ->select('*')
   ->from('hemocentro');
   return $this->db->get();
 }
}
