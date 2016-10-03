

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
                            <a href="<?= site_url('login/loginDoador2') ?>"><i class="fa fa-user"></i> Sou Doador</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?= site_url('login/loginHemocentro2') ?>"><i class="fa fa-tint"></i> Sou Hemocentro</a>
                        </li>
                    </ul>
                </li>
        <!--    <li class="dropdown">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Entrar <span class="caret"></span></a>
                <ul id="login-dp" class="dropdown-menu ">
                <li>
                   <div class="row">
                      <div class="col-md-12">

                        <?php if ($this->input->get('alerta') == 1) { ?>
                      						<div class="alert alert-danger col-lg-7">
                      						<h3 >Seu email ou senha estão incorretos.</h3>
                      						</div>
                      						<?php } ?>
                      						<?php if ($this->input->get('alerta') == 2) { ?>
                      						<div class="alert alert-danger">
                      							Você não possui acesso a url.
                      						</div>
                      						<?php } ?>
                                  <?php
                                   $aba_atual = 0; //lógica para usar dropdown e tab
                                    ?>
                                    <ul id="tabs_sistem" class="nav nav-tabs">
                                      <li id="tab_doador" <?php if ($aba_atual == 0) { ?> class="active"<?php } ?>>
                                        <a href="#doador" data-toggle="tab">Doador</a>
                                      </li>
                                      <li id="tab_hemocentro" <?php if ($aba_atual == 1) { ?> class="active"<?php } ?>>
                                        <a href="#hemocentro" data-toggle="tab">Hemocentro</a>
                                      </li>
                                    </ul>

                                    <ul class="nav nav-tabs">
					<!--		<li>
								<a data-toggle="tab" href="#doador">doador</a>
							</li>
							<li class="active">
								<a data-toggle="tab" href="#hemocentro">hemocentro</a>
							</li>
						</ul>

						<div class="tab-content">

                      <div id="doador" class="tab-pane fade in active">
                            <label for="Email">Email:</label>
                         <form class="form" role="form" method="post" action="<?=site_url('doador/logindoador')?>" accept-charset="UTF-8" id="login-nav">
                            <div class="form-group">
                               <label class="sr-only" for="emailDoador">Endereço de Email</label>
                               <input type="email" class="form-control" id="emailDoador" name="doador_email" placeholder="Email Doador" required>
                            </div>
                            <label for="Senha">Senha:</label>
                            <div class="form-group">
                               <label class="sr-only" for="senhaDoador">Senha</label>
                               <input type="password" class="form-control" id="senhaDoador" name="doador_senha" placeholder="Senha Doador" required>
                             </div>
                            <div class="form-group">
                               <button type="submit" class="btn btn-primary btn-block btn-danger">Entrar</button>
                            </div>
                            <a href="<?=site_url('cadastro/chamandoCadastroDoador')?>" > Cadastre-se</a>


                         </form>
                       </div>
                       <div id="hemocentro" class="tab-pane fade">
                         <label for="Email">Email:</label>
                      <form class="form" role="form" method="post" action="<?=site_url('hemocentro/loginhemocentro')?>" accept-charset="UTF-8" id="login-nav">
                         <div class="form-group">
                            <label class="sr-only" for="emailHemocentro">Endereço de Email</label>
                            <input type="email" class="form-control" id="emailHemocentro" name="hemocentro_email" placeholder="Email Hemocentro" required>
                         </div>
                         <label for="Senha">Senha:</label>
                         <div class="form-group">
                            <label class="sr-only" for="senhaHemocentro">Senha</label>
                            <input type="password" class="form-control" id="senhaHemocentro" name="hemocentro_senha" placeholder="Senha Hemocentro" required>
                          </div>
                         <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-danger">Entrar</button>
                         </div>
                         <a href="<?=site_url('cadastro/chamandoCadastroHemocentro')?>" > Cadastre-se</a>


                       </form>
                       </div>
                      </div>
                    </div>
                   </div>
                </li>-->
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
