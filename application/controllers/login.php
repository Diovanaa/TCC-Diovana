<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function loginDoador()
	{
		$this->load->view('cabecalho_view');
		$this->load->view('login_doador_view');
		$this->load->view('rodape_view');

	}
	public function loginHemocentro()
	{
		$this->load->view('cabecalho_view');
		$this->load->view('login_hemocentro_view');
		$this->load->view('rodape_view');
	}


 }
