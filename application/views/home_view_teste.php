

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top cor1">
      <div class="container cor1">
        <div class="navbar-header">

          <a class="navbar-brand" href="#">HemoUnião</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse ">
          <ul class="nav navbar-nav pull-right " >

						<li><a data-toggle="modal" href="<?=site_url('home')?>" >
	              <i class="fa fa-home" aria-hidden="true"></i>	 Home</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
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
<div class="col-lg-12 home">
<div class="row col-lg-12 diferente ">
  <div class="col-lg-2"></div>

    <a href="<?=site_url('cadastro/chamandoCadastroDoador')?>" > <div class="col-lg-3 col-md-6 col-xs-12 diferente1"><h2 class="diferente"></br></br></br>Cadastro de Doador</h2></div></a>


    <a href="<?=site_url('como_doar/chamandoComoDoar')?>" ><div class="col-lg-3 col-md-6 col-xs-12 diferente2"> <h2 class="diferente"></br></br></br>Como Doar</h2></div></a>


<a href="<?=site_url('cadastro/chamandoCadastroHemocentro')?>" > <div class="col-lg-3 col-md-6 col-xs-12 diferente3"><h2 class="diferente"></br></br></br>Cadastro de Hemocentro</h2></div></a>



  <div class="col-lg-2"></div>

    <a href="<?=site_url('ondedoar/chamandoOndeDoar')?>" > <div class="col-lg-3 col-md-6 col-xs-12 diferente4"><h2 class="diferente"></br></br></br>Onde Doar?</h2></div></a>


    <a href="<?=site_url('como_doar/chamandoComoDoar')?>" >
      <div class="col-lg-3 col-md-6 col-xs-12 diferente5">
        <h2 class="diferente"></br></br></br>Estoques</h2>
      </div>
    </a>


<a href="<?=site_url('login/loginHemocentro')?>" > <div class="col-lg-3 col-md-6 col-xs-12 diferente6"><h2 class="diferente"></br></br></br>Sangue</h2></div></a>


</div>
</div>
</br>
<hr class="featurette-divider">
