

<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top cor1">
    <div class="container cor1">
        <div class="navbar-header">

            <a class="navbar-brand" href="<?= site_url('home') ?>">HemoUnião</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse ">
          <ul class="nav navbar-nav pull-right " >

            <li><a class="branco" data-toggle="modal" href="<?=site_url('home')?>" >
                <i class="fa fa-home" aria-hidden="true"></i>	 Home</a></li>



                </ul>
          </ul>
        </li>
        </div><!--/.nav-collapse -->

    </div>
</nav>
</br>

<div class="baixo">
    <div class="row col-lg-12 col-sm-12">
        <div class="col-lg-3 col-sm-2">
        </div>
        <div class="col-lg-9 col-sm-9 ">
          <?php if ($this->input->get('alerta') == 3) { ?>
              <div class="alert alert-success col-lg-7">
                <h3 class="meio">Cadastro efetuado com sucesso!</h3>
              </div>
          <?php } ?>


            <h3 class="col-lg-7 centro"> Hemocentro efetue o login:</h3>
            <?php if ($this->input->get('alerta') == 1) { ?>
                <div class="alert alert-danger col-lg-7">
                    <h3 >Verifique se o email e a senha estão corretos.</h3>
                </div>
            <?php } ?>
            <?php if ($this->input->get('alerta') == 2) { ?>
                <div class="alert alert-danger">
                    Você não possui acesso a url.
                </div>
            <?php } ?>
            <form action="<?= site_url('hemocentro/loginhemocentro') ?>" method="post">
                <!-- Entrada email do doador-->
                <div class="form-group col-lg-7"></br>
                    <label for="emailHemocentro">Email*:</label>
                    <input type="email" id="emailHemocentro" name="hemocentro_email"
                           value="" class="form-control" required placeholder="Endereço de email"  />
                </div>
                <!-- Entrada senha do doador-->
                <div class="form-group col-lg-7 ">
                    <label for="senhaHemocentro">Senha*:</label>
                    <input type="password"	id="senhaHemocentro" name="hemocentro_senha" placeholder="Senha"
                           value="" class="form-control" required  />
                </div>
                <div class="col-lg-7">
                    <!-- Botao para entrar-->
                  <button type="submit" class="btn btn-primary btn-lg btn-block">ENTRAR</button>
                    <!-- Botao para Voltar
                    <button type="button" class="btn btn-primary" onclick="history.go(-1)">
                        VOLTAR
                    </button>-->
                        <!-- <input type="button" value="Voltar" onClick="history.go(-1)">
                        <input type="button" value="Avançar" onCLick="history.forward()">
                        <input type="button" value="Atualizar" onClick="history.go(0)">
                    -->
                </div>
            </form>

        </div>
    </div>
</div>
