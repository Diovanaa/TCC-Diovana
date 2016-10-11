<?php

class MY_ControllerLogado extends CI_Controller{

  function __construct(){
    parent::__construct();

      if(! $this->session->userdata('doadorLogado')){
        redirect('doador/carregarLogin/?aviso=2');
      }
      if(! $this->session->userdata('hemocentroLogado')){
        redirect('hemocentro/carregarLogin/?aviso=2');
      }

  }
}
