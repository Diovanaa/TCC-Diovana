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
	/* metodo construtor
	*/
/*	public function __construct($id_hemocentro, $nome, $telefone, $email, $senha, $estoque )
	{
		$this->id_hemocentro = $id_hemocentro;
		$this->nome = $nome;
		$this->telefone = $telefone;
		$this->email = $email;
		$this->estoque = $estoque;
	}*/

	public function Salvar() {
		return $this->db->insert('hemocentro', $this);
	}

	function getHemocentro($hemocentro) {
		$id_hemocentro = $this->session->userdata('id_hemocentro');
		$this->db
		->select('*')
		->from('Hemocentro')
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
  // fazer a função de listar os hemocentros;
	function getHemocentroSozinho($id_hemocentro) {

		$this->db
		->select("*")
		->from("hemocentro")
		->where('id_hemocentro', $id_hemocentro);

		return $query2 = $this->db->get()->result();

}
function getEstoque($estoque) {
	$id_hemocentro = $this->session->userdata('id_hemocentro');
	$this->db
	->select("*")
	->from("Estoque")
	->where('id_hemocentro', $id_hemocentro);
	return $this->db->get();
}
/* metodo registrar doacao
registra uma doação, incrementa o estoque atual
@param  $doacao = sangue adquirido

public function registrarDoacao($doacao){
	$this->estoque += $doacao;
}
*/
/* metodo getEstoque
retorna a quantidade em estoque

public function getEstoque()
{
return $this->estoque;
	}*/

}
