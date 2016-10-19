<?php

class Estoque_model extends CI_Model {

    public  $id_estoque;
    public  $id_hemocentro;
    public  $tipo_a0;
  	public  $tipo_a1;
    public  $tipo_b0;
    public  $tipo_b1;
    public  $tipo_ab0;
    public  $tipo_ab1;
    public  $tipo_o0;
    public  $tipo_o1;
    function __construct() {
        parent::__construct();
    }

    public function Salvar(){
       return $this->db->insert('Estoque', $this);
   }

   function estoque(){
     	$id_estoque = $this->session->userdata('id_estoque');
      $this->db
     ->select("*")
     ->from('Estoque')
     ->join('Hemocentro', 'estoque.id_hemocentro = Hemocentro.id_hemocentro')
     ->where('id_hemocentro', $id_hemocentro);
     return $query = $this->db->get()->result();
   }
   public function excluir($id_hemocentro, $id_estoque){

 	$this->db->where('id_hemocentro', $id_hemocentro);
 	$this->db->where('id_estoque', $id_estoque);
 return	$this->db->delete('estoque');

 }
}
