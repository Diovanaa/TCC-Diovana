<?php

class Doacao_model extends CI_Model {

  //  public  $id_doacao;
    public  $tipo_doacao;
  	public  $data_doacao;
  	public  $data_ultimadoacao;
  	public  $data_proximadoacao;
    //public  $id_doador;
  //  public  $id_hemocentro;
    public $hemocentro_nome;
    function __construct() {
        parent::__construct();
    }

    public function Salvar(){
       return $this->db->insert('Doacao', $this);
   }

   function doacoes(){
     	$id_doacao = $this->session->userdata('id_doacao');
      $this->db
     ->select("*")
     ->from('Doacao')
     ->join('Doador', 'doacao.id_doacao = doador.id_doador')
     ->join('Hemocentro', 'doacao.id_doacao = Hemocentro.id_hemocentro')
     ->where('id_doador', $id_doador)
     ->where('id_hemocentro', $id_hemocentro)
     return $query = $this->db->get()->result();
   }
   function atualizarDoacao(){
     
   }
