<?php

class MY_ControllerLogado extends CI_Controller{

  function __construct(){
    parent::__construct();

      if(! $this->session->userdata('usuarioLogado')){
        redirect('login/loginDoador/?alerta=6');
      }


  }
}
