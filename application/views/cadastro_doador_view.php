<div class="row fundo">
<div class="col-lg-12"><!-- cabeçalho-->
    <!-- navbar -->
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
</div><!-- fecha  cabeçalho-->
</br>
</br>
</br>
<!-- cadastro-->



<div class=" fundo content container-fluid card col-sm-12 col-sm-offset-2 ">
		<div class=" fundo container-page">
			<div class="col-md-6">
				<h3>Cadastro de Doador:</h3>
                <?php echo validation_errors(); ?>
        				<?php if ($this->input->get('alerta') == 1) { ?>
                  <a data-toggle="modal" href="<?=site_url('login/loginDoador')?>">

        				<?php } ?>
        				<?php if ($this->input->get('alerta') == 2) { ?>
        				<div class="alert alert-danger">
        							<h2>E-mail já cadastrado!<h2>
        				</div>
        				<?php } ?>
        <!-- Abertura de formulário para cadastro de doador-->
        <form action="<?=site_url('doador/Salvar')?>" method="post">
              <!-- Entrada nome doador-->
				      <div class="form-group col-lg-12">
                    <label for="nomeDoador">Nome completo*:</label>
                    <input type="text" id="nomeDoador" name="doador_nome" placeholder="Ex.: João da Silva"
                    value="" class="form-control" required  />
				      </div>
              <div class="form-group col-lg-12">
                    <label for="emailDoador">Email*:</label>
                    <input type="E-mail" id="emailDoador" name="doador_email" placeholder="joao@email.com"
                    value="" class="form-control" required   />
  						</div>

              <!-- Entrada data de nascimento do doador-->

              <div class="form-group col-lg-6">
                    <label for="nascimentoDoador">Data de nascimento*:</label>
                    <input type="date" id="" name="doador_data_nascimento" placeholder="01/01/2000"
                    value="" class="form-control" required  />
              </div>



              <!-- Entrada telefone do doador-->
				      <div class="form-group col-lg-6">
					         <label for="telefoneDoador">Telefone*:</label>
					         <input type="tel"   id="" name="doador_telefone" placeholder="Ex.: (99) 9999-9999"
					         value="" class="telefone form-control " required  />
				      </div>


              <!-- Seleção do tipo sanguineo do doador-->

             <!-- Escolha do sexo do doador-->
					   <div class="form-group col-lg-6">
					          <label for="sexoDoador">Sexo*: </label> </br>
						              <label class="radio-inline">
							                     <input type="radio" name="doador_sexo" id="inlineRadio1" value="Masculino" >
                                        Masculino
                                   </input>
						              </label>
						              <label class="radio-inline">
							                     <input type="radio" name="doador_sexo" id="inlineRadio2" value="Feminino" >
                                        Feminino
                                   </input>
						              </label>
						</div>
            <div class="form-group col-lg-6">
                <label for="tiposanguineoDoador">Tipo Sanguineo*:</label>
                     <select class="form-control" name="doador_tipo_sanguineo" id="tipoSanguineo">
                          <option value="A-">A-</option>
                          <option value="A+">A+</option>
                          <option value="B-">B-</option>
                          <option value="B+">B+</option>
                          <option value="AB-">AB-</option>
                          <option value="AB+">AB+</option>
                          <option value="O-">O-</option>
                          <option value="O+">O+</option>
                    </select>
           </div>
            <!-- Entrada email do doador-->

            <!-- Entrada senha do doador-->
				    <div class="form-group col-lg-6">
					         <label for="senhaDoador">Senha*:</label>
					         <input type="password"	id="senhaDoador" name="doador_senha" placeholder="Digite sua senha"
					         value="" class="form-control" required  />
					 </div>
           <!-- Repetindo a senha para ver se confere-->
				   <div class="form-group col-lg-6">
					        <label for="senhaDoador">Repita a senha*:</label>
					        <input type="password" id="senhaDoador" name="doador_senha" placeholder="Repita sua senha"
					        value="" class="form-control" required  />
			   	</div>


          <!-- Entrada estado do doador-->

          <div class="form-group col-lg-6">
              <label for="estadoDoador">Estado*:</label>
                   <select class="form-control" name="doador_estado" id="estadoDoador">
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

          <!-- Entrada cidade do doador-->
				  <div class="form-group col-lg-6">
					       <label for="cidadeDoador">Cidade*:</label>
					       <input type="text" id="cidadeDoador" name="doador_cidade" placeholder="Ex.: São Paulo"
					       value="" class="form-control" required  />
				  </div>
        <!-- Entrada endereço do doador -->
				  <div class="form-group col-lg-12">
					       <label for="enderecoHemocentro">Endereco*:</label>
					       <input type="text" id="enderecoHemocentro" name="doador_endereco" placeholder="Ex.: Rua, numero 999, Bairro"
					       value="" class="form-control" required  />
				  </div>


          <h5>*Campos obrigatórios</h5>
          <!-- Botão para cadastrar-->
				  <div class="col-lg-3">
				        <button type="submit" class="btn btn-primary">
					             CADASTRAR
				        </button>

			    </div>

          <?php $nivel = "DOADOR"; ?>

          <input type="hidden" name="nivel" value="<?php echo $nivel; ?>"/>
				  <br>
				  <br>
        </form><!-- Fecha formulário-->
			 </div>
		</div>
</div> <!-- fecha cadastro-->
</div>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
	window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
	</script>

	<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
	<script src="<?=base_url('../../assets/js/vendor/holder.min.js')?>"></script>
	<script src="<?=base_url('assets/js/jquery.mask.min.js')?>" type="text/javascript"></script>
  <script type="text/javascript">
  		$('.telefone').mask('(00) 0000 - 0000');
  </script>
  <script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
  <script>
      webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
  </script>

</body>
</html>
