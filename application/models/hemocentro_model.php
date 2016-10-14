<?php

class Hemocentro_model extends CI_Model {

	public $id_hemocentro;
	public $nome;
	public $telefone;
	public $email;
	public $senha;
	public $endereco;
	public $estado;
	public $cidade;
	public $bairro;
	public $cep;


	function __construct() {
		parent::__construct();
	}
	public function Salvar() {
		return $this->db->insert('hemocentro', $this);
	}

	function getHemocentro() {
		$id_hemocentro = $this->session->userdata('id_hemocentro');
		$this->db
		->select('*')
		->from('Hemocentro')
		->where('id_hemocentro', $id_hemocentro);
		return $this->db->get();
	}

	function getEstoque($estoque) {
		$id_hemocentro = $this->session->userdata('id_hemocentro');
		$this->db
		->select("*")
		->from("estoque")
		->where('id_hemocentro', $id_hemocentro);
		return $this->db->get();
	}

	function alterar($data) {
		$id_hemocentro = $this->session->userdata('id_hemocentro');
		$this->db->where('id_hemocentro', $id_hemocentro);
		$this->db->set($data);
		return $this->db->update('Hemocentro');
	}
	function alterarSenha($data) {
		$id_hemocentro = $this->session->userdata('id_hemocentro');
		$this->db->where('id_hemocentro', $id_hemocentro);
		$this->db->set($data);
		return $this->db->update('Hemocentro');
	}
	function alterarEstoque($data) {
		$id_hemocentro = $this->session->userdata('id_hemocentro');
		$this->db->where('id_hemocentro', $id_hemocentro);
		$this->db->set($data);
		return $this->db->update('Estoque');
	}
  // fazer a função de listar os hemocentros;
	public function excluir($id_hemocentro, $id_estoque){
	$id_hemocentro = $this->session->userdata('id_hemocentro');
	$this->db->where('id_hemocentro', $id_hemocentro);
	$this->db->where('id_estoque', $id_estoque);
	$this->db->delete('Estoque');

	}
function meuEstoque() {
	$id_hemocentro = $this->session->userdata('id_hemocentro');
	$this->db
	->select("*")
	->from("Estoque")
	->join('hemocentro', 'estoque.id_hemocentro = hemocentro.id_hemocentro')
	->where('hemocentro.id_hemocentro', $id_hemocentro);
	return $this->db->get()->result();
}
}
