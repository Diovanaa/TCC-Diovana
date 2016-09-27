<?php

class Endereco_model extends CI_Model {

    public  $id_endereco;
    public  $cidade;
  	public  $rua;
  	public  $numero;
  	public  $bairro;
    public  $cep;
    public  $uf;


    function __construct() {
        parent::__construct();
    }

    function getEndereco($id_endereco) {
      $id_endereco = (int)$id_endereco;
      $this->db->where('id_endereco', $id_endereco);
      return $this->db->get('Endereco');
    }

$hemouniao = new Endereco_model;
if(method_exists($hemouniao, setEngereco)){
  echo 'hemounuao possui setEndereco'
}
if (method_exists($hemounuao, getEndereco)) {
  echo 'hemouniao possui get Endereco'
}
}
