
<div class="col-lg-12">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

          <a class="navbar-brand" href="#">HemoUnião</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right " >
						<li><a data-toggle="modal" href="<?=site_url('home')?>" >
	              <i class="fa fa-home" aria-hidden="true"></i>	 Home</a></li>
								<li><a data-toggle="modal" href="<?=site_url('sangue')?>" >

								<i class="fa fa-tint" aria-hidden="true"></i>  Sangue</a></li>



						<li><a data-toggle="modal" href="<?=base_url('doacao')?>" >

						<i class="fa fa-heart" aria-hidden="true"></i>  Doação</a></li>


						<li><a data-toggle="modal" href="<?=site_url('login')?>" onclick="openLoginModal();">
                <i class="fa fa-user" aria-hidden="true"></i>	 Login</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</br>


		<div class="content container-fluid  card col-sm-8 col-sm-offset-2">
			<div class="row content">
				<div>
					<div class="col-sm-8 col-sm-offset-2">
          </br>
        </br>
						<h2>Cadastro de Hemocentro</h2>

						<?php echo validation_errors(); ?>
						<?php if ($this->input->get('aviso') == 1) { ?>
						<div class="alert alert-success">
							Cadastrado realizado com sucesso! Por favor faça login para usar o sistema!
						</div>
						<?php } ?>
						<?php if ($this->input->get('aviso') == 2) { ?>
						<div class="alert alert-danger">
							E-mail já cadastrado!
						</div>
						<?php } ?>


						<div class="tab-content">

              <div id="ong" class="tab-pane fade in active">
                </br>
                <form action="<?=site_url('salvar_hemocentro')?>" method="post">
                  <div class="form-group">
                    <label for="nomeHemocentro">Nome do seu Hemocentro*:</label>
                    <input type="text"
                    id="nomeHemocentro" name="hemocentro_nome"
                    value="" class="form-control" required />
                  </div>
                  <div class="form-group">
                    <label for="telefoneHemocentro">Telefone para contato*:</label>
                    <input type="tel"
                    id="telefoneHemocentro" name="Hemocentro_telefone"
                    value="" class="form-control" required  />
                  </div>
                  <div class="form-group">
                    <label for="emailHemocentro">E-mail*:</label>
                    <input type="email"
                    name="hemocentro_email" id="emailHemocentro"
                    value="" class="form-control" required  />
                  </div>

                  <div class="form-group">
                    <label for="senhaHemocentro">Senha*:</label>
                    <input type="password"
                    id="senhaHemocentro" name="hemocentro_senha"
                    value="" class="form-control" required  />
                  </div>

                  <h3>Endereço do Hemocentro:</h3>
                  <div class="form-group">
                    <label for="ruaHemocentro">Rua*:</label>
                    <input type="text"
                    id="ruaHemocentro" name="hemocentro_rua"
                    value="" class="form-control" required  />
                  </div>
                  <div class="form-group">
                    <label for="bairroHemocentro">Bairro*:</label>
                    <input type="text"
                    id="bairroHecmocentro" name="hemocentro_bairro"
                    value="" class="form-control" required  />
                  </div>
                  <div class="form-group">
                    <label for="numeroHemocentro">Número*:</label>
                    <input type="text"
                    id="numeroHemocentro" name="Hemocentro_numero"
                    value="" class="form-control" required  />
                  </div>
                  <div class="form-group">
                    <label for="cidadeHemocentro">Cidade*:</label>
                    <input type="text"
                    id="cidadeHemocentro" name="hemocentro_cidade"
                    value="" class="form-control" required  />
                  </div>
                  <div class="form-group">
                    <label for="ufHemocentro">Estado*:</label>
                    <input type="text"
                    id="ufHemocentro" name="hemocentro_uf"
                    value="" class="form-control" required  />
                  </div>
                  <div class="form-group">
                    <label for="cepHemocentro">CEP*:</label>
                    <input type="text"
                    id="cepHemocentro" name="hemocentro_cep"
                    value="" class="form-control" required  />
                  </div>
                    <h5>*Campos obrigatórios</h5>
                  <button type="submit" class="btn btn-danger">
                    CADASTRAR
                  </button>
                  <br>
                  <br>
                </form>
              </div>


						</div>
					</div>
				</div>
			</div>
		</div>

</br>
</div>
