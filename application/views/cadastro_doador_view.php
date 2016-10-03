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
                    <input type="text" id="nomeDoador" name="doador_nome" placeholder="Ex.: João da Silva"
                    value="" class="form-control" required  />
				      </div>
              <!-- Entrada data de nascimento do doador-->
				      <div class="form-group col-lg-6">
                   <label for="datanascimentoDoador">Data de Nascimento*:</label>
                   <input type="date" id="datanascimentoDoador" name="doador_data_nascimento" placeholder="Ex.: 01/02/1992"
                   value="" class="form-control" required  />
              </div>
              <!-- Entrada telefone do doador-->
				      <div class="form-group col-lg-6">
					         <label for="telefoneDoador">Telefone*:</label>
					         <input type="tel" id="telefoneDoador" name="doador_telefone" placeholder="Ex.: (99) 9999-9999"
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
                  <input type="email" id="emailDoador" name="doador_email" placeholder="joao@email.com"
                  value="" class="form-control" required   />
						</div>
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
				        <button type="submit" class="btn btn-danger">
					             CADASTRAR
				        </button>

			    </div>
          <div class="col-lg-3">

                <button type="button" class="btn btn-primary" onclick="history.go(-1)">
                        VOLTAR
                </button>
			    </div>
          <?php $nivel = "DOADOR"; ?>
          <input type="hidden" name="doador_data_nascimento" value="<?php echo date('Y/m/d'); ?>"/>
          <input type="hidden" name="nivel" value="<?php echo $nivel; ?>"/>
				  <br>
				  <br>
        </form><!-- Fecha formulário-->
			 </div>
		</div>
</div> <!-- fecha cadastro-->
