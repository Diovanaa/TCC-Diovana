
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
						<h2>Cadastro de Doador</h2>

						<?php echo validation_errors(); ?>
						<?php if ($this->input->get('alerta') == 1) { ?>
						<div class="alert alert-success">
							Cadastrado realizado com sucesso! Por favor faça login para usar o sistema!
						</div>
						<?php } ?>
						<?php if ($this->input->get('alerta') == 2) { ?>
						<div class="alert alert-danger">
							E-mail já cadastrado! Tente inserir outro e-mail, ou se lembrar se já não se cadastrou no sistema!
						</div>
						<?php } ?>


						<div class="tab-content">




							<div id="doador" class="tab-pane fade in active">
								</br>
								<form action="<?=site_url('salvar_doador')?>" method="post">
									<div class="form-group">
										<label for="nomeDoador">Nome completo*:</label>
										<input type="text"
										id="nomeDoador" name="doador_nome"
										value="" class="form-control" required  />
									</div>

									<div class="form-group">
										<label for="datanascimentoDoador">Data de Nascimento*:</label>
										<input type="date"
										id="datanascimentoDoador" name="doador_data_nascimento"
										value="" class="form-control" required  />
									</div>
									<div class="form-group">
										<label for="tiposanguineoDoador">Tipo Sanguineo*:</label>
                    <select class="form-control">
                      <option>A-</option>
                      <option>A+</option>
                      <option>B-</option>
                      <option>B+</option>
                      <option>AB-</option>
                      <option>AB+</option>
                      <option>O-</option>
                      <option>O+</option>
                    </select>
									</div>
									<div class="form-group">
										<label for="fatorRHDoador"> Tirar Fator RH*:</label>
										<input type="text"
										id="fatorRHDoador" name="doador_fatorRH"
										value="" class="form-control" required  />
									</div>
									<div class="form-group">
										<label for="sexoDoador">Sexo*: </label></br>
                    <label class="radio-inline">
                      <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Masculino
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Femenino
                    </label>

									</div>
									<div class="form-group">
										<label for="celularDoador">Telefone*:</label>
										<input type="tel"
										id="celularDoador" name="doador_telefone"
										value="" class="form-control" required  />
									</div>

									<div class="form-group">
										<label for="emailDoador">Email*:</label>
										<input type="email"
										id="emailDoador" name="doador_email"
										value="" class="form-control" required  />
									</div>

									<div class="form-group">
										<label for="senhaDoador">Senha*:</label>
										<input type="password"
										id="senhaDoador" name="doador_senha"
										value="" class="form-control" required  />
									</div>
									<h3>Endereço do Doador:</h3>
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
