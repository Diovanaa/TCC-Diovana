
<div class="col-lg-12">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top cor1">
      <div class="container cor1">
        <div class="navbar-header">

          <a class="navbar-brand" href="<?=site_url('home')?>">HemoUnião</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse ">
          <ul class="nav navbar-nav pull-right " >

						<li><a class="branco" data-toggle="modal" href="<?=site_url('home')?>" >
	              <i class="fa fa-home" aria-hidden="true"></i>	 Home</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle branco" data-toggle="dropdown">
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
</br>
</br>

<div class=" content container-fluid card col-sm-12 col-sm-offset-2">

		<div class="container-page">
			<div class="col-md-6 ">
				<h3>Cadastro de Hemocentro:</h3>

        						<?php echo validation_errors(); ?>
        						<?php if ($this->input->get('alerta') == 1) { ?>
                      <a data-toggle="modal" href="<?=site_url('login/loginHemocentro')?>" >
        						<?php } ?>
        						<?php if ($this->input->get('alerta') == 2) { ?>
        						<div class="alert alert-danger">
        						<h2>E-mail já cadastrado!<h2>
        						</div>
        						<?php } ?>

        <form action="<?=site_url('hemocentro/salvar_hemocentro')?>" method="post">
				<div class="form-group col-lg-6">
          <label for="nomeHemocentro">Nome Hemocentro*:</label>
          <input type="text"
          id="nomeHemocentro" name="hemocentro_nome" placeholder="Ex.: HemoUnião"
          value="" class="form-control" required />
				</div>

        <div class="form-group col-lg-6">
            <label for="telefoneHemocentro">Telefone*:</label>
            <input type="tel"
            id="telefoneHemocentro" name="hemocentro_telefone" placeholder="Ex.: (99) 9999-9999"
            value="" class="form-control" required  />

        </div>
        <div class="form-group col-lg-12">
          <label for="emailHemocentro">E-mail*:</label>
          <input type="email"
          name="hemocentro_email" id="emailHemocentro" placeholder="Ex.: hemouniao@email.com"
          value="" class="form-control" required  />

        </div>

				<div class="form-group col-lg-6">
          <label for="senhaHemocentro">Senha*:</label>
          <input type="password"
          id="senhaHemocentro" name="hemocentro_senha" placeholder="Digite uma senha"
          value="" class="form-control" required  />
				</div>

        <div class="form-group col-lg-6">
          <label for="senhaHemocentro">Confirmar Senha*:</label>
          <input type="password"
          id="senhaHemocentro" name="hemocentro_senha" placeholder="Repita a senha "
          value="" class="form-control" required  />
				</div>


        <div class="form-group col-lg-6">
            <label for="estadoHemocentro">Estado*:</label>
                 <select class="form-control" name="hemocentro_estado" id="estadoHemocentro">
                   <option value="Acre">Acre</option>
                   <option value="Alagoas">Alagoas</option>
                   <option value="Amazonas">Amazonas</option>
                   <option value="Amapá">Amapá</option>
                   <option value="Bahia">Bahia</option>
                   <option value="Ceará">Ceará</option>
                   <option value="Distrito Federal">Distrito Federal</option>
                   <option value="Espírito Santo">Espírito Santo</option>
                   <option value="Goiás">Goiás</option>
                   <option value="Maranhão">Maranhão</option>
                   <option value="Mato Grosso">Mato Grosso</option>
                   <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                   <option value="Minas Gerais">Minas Gerais</option>
                   <option value="Pará">Pará</option>
                   <option value="Paraíba">Paraíba</option>
                   <option value="Paraná">Paraná</option>
                   <option value="Pernambuco">Pernambuco</option>
                   <option value="Piauí">Piauí</option>
                   <option value="Rio de Janeiro">Rio de Janeiro</option>
                   <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                   <option value="Rondônia">Rondônia</option>
                   <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                   <option value="Roraima">Roraima</option>
                   <option value="Santa Catarina">Santa Catarina</option>
                   <option value="Sergipe">Sergipe</option>
                   <option value="São Paulo">São Paulo</option>
                   <option value="Tocantins">Tocantins</option>
                </select>
       </div>

				<div class="form-group col-lg-6">
					<label for="cidadeHemocentro">Cidade*:</label>
					<input type="text"
					id="cidadeHemocentro" name="hemocentro_cidade" placeholder="Ex.: São Paulo"
					value="" class="form-control" required  />
				</div>

				<div class="form-group col-lg-12">
					<label for="enderecoHemocentro">Endereço*:</label>
					<input type="text"
						id="enderecoHemocentro" name="hemocentro_endereco" placeholder="Ex.: Rua, Numero"
					value="" class="form-control" required  />
				</div>

				<div class="form-group col-lg-6">
					<label for="bairroHemocentro">Bairro*:</label>
					<input type="text"
					id="bairroHecmocentro" name="hemocentro_bairro" placeholder="Ex.: Centro"
					value="" class="form-control" required  />
				</div>

<!--	<div class="form-group col-lg-6">
		<label for="numeroHemocentro">Número*:</label>
		<input type="text"
		id="numeroHemocentro" name="hemocentro_numero"
		value="" class="form-control" required  />
	</div>
-->

	<div class="form-group col-lg-6"><label for="cepHemocentro">CEP*:</label>
	<input type="text"
	id="cepHemocentro" name="hemocentro_cep" placeholder="Ex.: 00000-000"
	value="" class="form-control" required  />
	</div>
  <div class="col-lg-12">
  				<h5>*Campos obrigatórios</h5>


				<div class="col-xs-7 col-md-5 col-lg-3">
				<button type="submit" class="btn btn-primary">
					CADASTRAR
				</button>

			</div>

    </div>
    </div>
				<br>

				<br>
</form>
			</div>

		</div>

</div>
