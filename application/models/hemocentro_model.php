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

	function getHemocentroPorEstado($teste) {
		$this->db
		->select('*')
		->from('hemocentro')
		->like('estado', $teste)
		->or_like('cidade', $teste)
		->order_by("hemocentro.nome", "asc");
		return $qr = $this->db->get()->result();
	}

	function getHemocentro($id_hemocentro) {
		//$id_hemocentro = $this->session->userdata('id_hemocentro');
		//var_dump($id_hemocentro);
		$this->db
		->select('*')
		->from('hemocentro')
		->where('id_hemocentro', $id_hemocentro);
		return $this->db->get();
	}


	function getEstoque($estoque) {
		$this->db
		->select("*")
		->from("estoque")
		->where('id_estoque', $estoque);
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
	function alterarEstoque($data, $id_estoque) {
		$id_hemocentro = $this->session->userdata('id_hemocentro');
		$this->db->where('id_hemocentro', $id_hemocentro);
		$this->db->where('id_estoque', $id_estoque);
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

	function listarPossiveisDoadores(){
		$status = 'Aguardando Confirmação';
		$this->db
		->select("*")
		->from("doacao_marcada")
		->join("doador", "doacao_marcada.id_doador = doador.id_doador")
		->where('status_doacao_marcada', $status)
		->where('id_hemocentro', $this->session->userdata('id_hemocentro'));

		return $this->db->get()->result();
	}


	//function listarDoadores(){

	//	$status = 'Doação Aceita';
	//	$data_inicial = '2016-11-06';
	//	$data_final = '2016-11-12';
	//	$this->db
	//	->select("*")
	//	->from("doacao_marcada")
	//	->join("doador", "doacao_marcada.id_doador = doador.id_doador")
	//	->where('status_doacao_marcada', $status)
	//  ->where('data_doacao_marcada BETWEEN "'. date('Y-m-d', strtotime($data_inicial)). '
	//	" and "'. date('Y-m-d', strtotime($data_final)).'"')
//		->where('id_hemocentro', $this->session->userdata('id_hemocentro'))
//		->order_by("doacao_marcada.data_doacao_marcada", "asc");
	//	return $this->db->get()->result();

//	}
	function listarDoadores(){

		$status = 'Doação Aceita';
		$data_atual = date('y/m/d');
		$this->db
		->select("*")
		->from("doacao_marcada")
		->join("doador", "doacao_marcada.id_doador = doador.id_doador")
		->where('status_doacao_marcada', $status)
	  ->where('data_doacao_marcada', $data_atual )
		->where('id_hemocentro', $this->session->userdata('id_hemocentro'))
		->order_by("doacao_marcada.data_doacao_marcada", "asc");
		return $this->db->get()->result();

	}


}
