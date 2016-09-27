<div class="col-lg-12"><!-- cabeçalho-->
    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top cor1">
      <div class="container cor1">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?=site_url('home')?>">HemoUnião</a>
        </div>
      </div>
    </nav>
</div><!-- fecha  cabeçalho-->
</br>
</br>
</br>
<!-- cadastro-->
<div class=" content container-fluid card col-sm-12 col-sm-offset-2">
		<div class="container-page">
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
                    <input type="text" id="nomeDoador" name="doador_nome"
                    value="" class="form-control" required  />
				      </div>
              <!-- Entrada data de nascimento do doador-->
				      <div class="form-group col-lg-6">
                   <label for="datanascimentoDoador">Data de Nascimento*:</label>
                   <input type="date" id="datanascimentoDoador" name="doador_data_nascimento"
                   value="" class="form-control" required  />
              </div>
              <!-- Entrada telefone do doador-->
				      <div class="form-group col-lg-6">
					         <label for="telefoneDoador">Telefone*:</label>
					         <input type="tel" id="telefoneDoador" name="doador_telefone"
					         value="" class="form-control" required  />
				      </div>
              <!-- Seleção do tipo sanguineo do doador-->
					    <div class="form-group col-lg-6">
					      	<label for="tiposanguineoDoador">Tipo Sanguineo*:</label>
						           <select class="form-control" name="doador_tipo_sanguineo" id="tipoSanguineo">
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
            <!-- Entrada email do doador-->
						<div class="form-group col-lg-12">
                  <label for="emailDoador">Email*:</label>
                  <input type="email" id="emailDoador" name="doador_email"
                  value="" class="form-control" required   />
						</div>
            <!-- Entrada senha do doador-->
				    <div class="form-group col-lg-6">
					         <label for="senhaDoador">Senha*:</label>
					         <input type="password"	id="senhaDoador" name="doador_senha"
					         value="" class="form-control" required  />
					 </div>
           <!-- Repetindo a senha para ver se confere-->
				   <div class="form-group col-lg-6">
					        <label for="senhaDoador">Repita a senha*:</label>
					        <input type="password" id="senhaDoador" name="doador_senha"
					        value="" class="form-control" required  />
			   	</div>
          <!-- Entrada endereço do doador -->

          <!-- Entrada estado do doador-->
				  <div class="form-group col-lg-6">
					       <label for="estadoDoador">Estado*:</label>
				         <input type="text" id="estadoDoador" name="doador_estado"
				         value="" class="form-control" required  />
				  </div>
          <!-- Entrada cidade do doador-->
				  <div class="form-group col-lg-6">
					       <label for="cidadeDoador">Cidade*:</label>
					       <input type="text" id="cidadeDoador" name="doador_cidade"
					       value="" class="form-control" required  />
				  </div>
          <!-- Entrada rua do doador-->
				  <div class="form-group col-lg-12">
					       <label for="enderecoHemocentro">Endereco*:</label>
					       <input type="text" id="enderecoHemocentro" name="doador_endereco"
					       value="" class="form-control" required  />
				  </div>
          <!-- Entrada bairro do doador-->
				  <div class="form-group col-lg-6">
					       <label for="bairroDoador">Bairro*:</label>
					       <input type="text" id="bairroDoador" name="doador_bairro"
					       value="" class="form-control" required  />
				  </div>
          <!-- Entrada numero do doador
	        <div class="form-group col-lg-6">
		            <label for="numeroHemocentro">Número*:</label>
		            <input type="text" id="numeroHemocentro" name="Hemocentro_numero"
		            value="" class="form-control" required  />
	        </div> -->
          <!-- Entrada cep do doador-->
	        <div class="form-group col-lg-6"><label for="cepDoador">CEP*:</label>
	             <input type="text" id="cepDoador" name="doador_cep"
	             value="" class="form-control" required  />
	        </div>

          <h5>*Campos obrigatórios</h5>
          <!-- Botão para cadastrar-->
				  <div class="col-lg-3">
				        <button type="submit" class="btn btn-danger">
					             CADASTRAR
				        </button>
              
			    </div>
          <div class="col-lg-3">

                <button type="button" class="btn btn-primary" onclick="history.go(-1)">
                        VOLTAR
                </button>
			    </div>
				  <br>
				  <br>
        </form><!-- Fecha formulário-->
			 </div>
		</div>
</div> <!-- fecha cadastro-->
