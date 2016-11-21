

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top cor1">
      <div class="container cor1">
        <div class="navbar-header">

          <a class="navbar-brand" href="#">HemoUnião</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse ">
          <ul class="nav navbar-nav pull-right " >

						<li><a class="branco" data-toggle="modal" href="<?=site_url('home')?>" >
	              <i class="fa fa-home branco" aria-hidden="true"></i>	 Home</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle branco" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Entrar <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="<?= site_url('login/loginDoador') ?>"><i class="fa fa-user"></i> Sou Doador</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?= site_url('login/loginHemocentro') ?>"><i class="fa fa-tint"></i> Sou Hemocentro</a>
                        </li>
                    </ul>
                </li>

                </ul>
          </ul>
        </li>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</br>
<br>
<br>
<br>

<div class="container theme-showcase" role="main">
  <div class="row ">
    <div class="col-lg-12">
      <img class="img-responsive" src="<?=base_url('assets/img/teste.png')?>" alt="Imagem">

    </div>

  </div>
<br>

    <div class="row fundo">
      <div class="col-lg-12 ">
        <div class="row col-lg-12 diferente fundo">

             <div class="col-lg-2 col-md-6 col-xs-6 diferente1">
               <a class="diferente" href="<?=site_url('cadastro/chamandoCadastroDoador')?>" ></br>Cadastro de doador</a>
             </div>
             <div class="col-lg-2 col-md-6 col-xs-6 diferente2">
               <a class="diferente" href="<?=site_url('como_doar/chamandoComoDoar')?>" ></br>Como doar</a>
             </div>
             <div class="col-lg-2 col-md-6 col-xs-6 diferente3">
              <a class="diferente" href="<?=site_url('cadastro/chamandoCadastroHemocentro')?>" ></br> Cadastro de hemocentro  </a>
             </div>
             <div class="col-lg-2 col-md-6 col-xs-6 diferente4">
               <a class="diferente" href="<?=site_url('ondedoar/chamandoOndeDoar')?>" > </br> Onde doar? </a>
             </div>
             <div class="col-lg-2 col-md-6 col-xs-6 diferente5">
               <a class="diferente" href="<?=site_url('como_doar/chamandoComoDoar')?>" ></br>Estoques</a>
             </div>
             <div class="col-lg-2 col-md-6 col-xs-6 diferente6">
              <a class="diferente" href="<?=site_url('login/loginHemocentro')?>" ></br>Sangue</a>
             </div>

</div>
</div>
</div>
</br>

<div>
<br>
