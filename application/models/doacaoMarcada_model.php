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
   function getDoacaoMarcada($doacao) {
       $this->db
               ->select("*")
               ->from("Doacao_marcada")
               ->where('id_doacao_marcada', $doacao);
       return $this->db->get();
   }
  public function excluir($id_doador, $id_doacao){
 	  $this->db->where('id_doador', $id_doador);
 	  $this->db->where('id_doacao', $id_doacao);
    return	$this->db->delete('Doacao_marcada');
 }

 public function procurarHemocentroParaDoar(){
   $this->db
   ->select('*')
   ->from('hemocentro');
   return $this->db->get();
 }
}
