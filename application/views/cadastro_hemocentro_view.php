
<div class="col-lg-12">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top cor1">
      <div class="container cor1">
        <div class="navbar-header">

          <a class="navbar-brand" href="<?=site_url('home')?>">HemoUnião</a>
        </div>

      </div>
    </nav>
</br>
</br>
</br>

<div class=" content container-fluid card col-sm-12 col-sm-offset-2">

		<div class="container-page">
			<div class="col-md-6">
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
                   <option value="AC">Acre</option>
                   <option value="AL">Alagoas</option>
                   <option value="AM">Amazonas</option>
                   <option value="AP">Amapá</option>
                   <option value="BA">Bahia</option>
                   <option value="CE">Ceará</option>
                   <option value="DF">Distrito Federal</option>
                   <option value="ES">Espírito Santo</option>
                   <option value="GO">Goiás</option>
                   <option value="MA">Maranhão</option>
                   <option value="MT">Mato Grosso</option>
                   <option value="MS">Mato Grosso do Sul</option>
                   <option value="MG">Minas Gerais</option>
                   <option value="PA">Pará</option>
                   <option value="PB">Paraíba</option>
                   <option value="PR">Paraná</option>
                   <option value="PE">Pernambuco</option>
                   <option value="PI">Piauí</option>
                   <option value="RJ">Rio de Janeiro</option>
                   <option value="RN">Rio Grande do Norte</option>
                   <option value="RO">Rondônia</option>
                   <option value="RS">Rio Grande do Sul</option>
                   <option value="RR">Roraima</option>
                   <option value="SC">Santa Catarina</option>
                   <option value="SE">Sergipe</option>
                   <option value="SP">São Paulo</option>
                   <option value="TO">Tocantins</option>
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
				<button type="submit" class="btn btn-danger">
					CADASTRAR
				</button>

			</div>
      	<div class="col-xs-7 col-md-5 col-lg-3 ">
      <button type="button" class="btn btn-primary" onclick="history.go(-1)">
              VOLTAR
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
