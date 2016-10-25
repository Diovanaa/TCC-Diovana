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
              <!-- Entrada data de nascimento do doador-->
              <div class="form-group col-lg-12">
                  <label for="nomeDoador">Data de Nascimento*:</label>
              </div>
              <div class="form-group col-lg-4">

                <select class=" form-control" name="doador_data_dia" id="data_dia">
                     <option value="DD">DD</option>
                     <option value="01">01</option>
                     <option value="02">02</option>
                     <option value="03">03</option>
                     <option value="04">04</option>
                     <option value="05">05</option>
                     <option value="06">06</option>
                     <option value="07">07</option>
                     <option value="08">08</option>
                     <option value="09">09</option>
                     <option value="10">10</option>
                     <option value="11">11</option>
                     <option value="12">12</option>
                     <option value="13">13</option>
                     <option value="14">14</option>
                     <option value="15">15</option>
                     <option value="16">16</option>
                     <option value="17">17</option>
                     <option value="18">18</option>
                     <option value="19">19</option>
                     <option value="20">20</option>
                     <option value="21">21</option>
                     <option value="22">22</option>
                     <option value="23">23</option>
                     <option value="24">24</option>
                     <option value="25">25</option>
                     <option value="26">26</option>
                     <option value="27">27</option>
                     <option value="28">28</option>
                     <option value="29">29</option>
                     <option value="30">30</option>
                     <option value="31">31</option>

               </select>
              </div>

                <!--  <div class="col-md-4 col-lg-4 - col-xs-4">-->
<div class="form-group col-lg-4">
                <select class=" form-control" name="doador_data_mes" id="data_mes">
                     <option value="MM">MM</option>
                                                                 <option value="01">Janeiro</option>
                                                                 <option value="02">Fevereiro</option>
                                                                 <option value="03">Março</option>
                                                                 <option value="04">Abril</option>
                                                                 <option value="05">Maio</option>
                                                                 <option value="06">Junho</option>
                                                                 <option value="07">Julho</option>
                                                                 <option value="08">Agosto</option>
                                                                 <option value="09">Setembro</option>
                                                                 <option value="10">Outubro</option>
                                                                 <option value="11">Novembro</option>
                                                                 <option value="12">Dezembro</option>



               </select>
              </div>
                <!--  <div class="col-md-4 col-lg-4 - col-xs-4">-->
<div class="form-group col-lg-4">
                <select class=" form-control" name="doador_data_ano" id="data_ano">
                     <option value="AAAA">AAAA</option>
                     <option value="2015">2015</option>
                     <option value="2014">2014</option>
                     <option value="2013">2013</option>
                     <option value="2012">2012</option>
                     <option value="2011">2011</option>
                     <option value="2010">2010</option>
                     <option value="2009">2009</option>
                     <option value="2008">2008</option>
                     <option value="2007">2007</option>
                     <option value="2006">2006</option>
                     <option value="2005">2005</option>
                     <option value="2004">2004</option>
                     <option value="2003">2003</option>
                     <option value="2002">2002</option>
                     <option value="2001">2001</option>
                     <option value="2000">2000</option>
                     <option value="1999">1999</option>
                     <option value="1998">1998</option>
                     <option value="1997">1997</option>
                     <option value="1996">1996</option>
                     <option value="1995">1995</option>
                     <option value="1994">1994</option>
                     <option value="1993">1993</option>
                     <option value="1992">1992</option>
                     <option value="1991">1991</option>
                     <option value="1990">1990</option>
                     <option value="1989">1989</option>
                     <option value="1988">1988</option>
                     <option value="1987">1987</option>
                     <option value="1986">1986</option>
                     <option value="1985">1985</option>
                     <option value="1984">1984</option>
                     <option value="1983">1983</option>
                     <option value="1982">1982</option>
                     <option value="1981">1981</option>
                     <option value="1980">1980</option>
                     <option value="1979">1979</option>
                     <option value="1978">1978</option>
                     <option value="1977">1977</option>
                     <option value="1976">1976</option>
                     <option value="1975">1975</option>
                     <option value="1974">1974</option>
                     <option value="1973">1973</option>
                     <option value="1972">1972</option>
                     <option value="1971">1971</option>
                     <option value="1970">1970</option>
                     <option value="1969">1969</option>
                     <option value="1968">1968</option>
                     <option value="1967">1967</option>
                     <option value="1966">1966</option>
                     <option value="1965">1965</option>
                     <option value="1964">1964</option>
                     <option value="1963">1963</option>
                     <option value="1962">1962</option>
                     <option value="1961">1961</option>
                     <option value="1960">1960</option>
                     <option value="1959">1959</option>
                     <option value="1958">1958</option>
                     <option value="1957">1957</option>
                     <option value="1956">1956</option>
                     <option value="1955">1955</option>
                     <option value="1954">1954</option>
                     <option value="1953">1953</option>
                     <option value="1952">1952</option>
                     <option value="1951">1951</option>
                     <option value="1950">1950</option>
                     <option value="1949">1949</option>
                     <option value="1948">1948</option>
                     <option value="1947">1947</option>
                     <option value="1946">1946</option>
                     <option value="1945">1945</option>
                     <option value="1944">1944</option>
                     <option value="1943">1943</option>
                     <option value="1942">1942</option>
                     <option value="1941">1941</option>
                     <option value="1940">1940</option>
                     <option value="1939">1939</option>
                     <option value="1938">1938</option>
                     <option value="1937">1937</option>
                     <option value="1936">1936</option>
                     <option value="1935">1935</option>
                     <option value="1934">1934</option>
                     <option value="1933">1933</option>
                     <option value="1932">1932</option>
                     <option value="1931">1931</option>
                     <option value="1930">1930</option>
                     <option value="1929">1929</option>
                     <option value="1928">1928</option>
                     <option value="1927">1927</option>
                     <option value="1926">1926</option>
                     <option value="1925">1925</option>
                     <option value="1924">1924</option>
                     <option value="1923">1923</option>
                     <option value="1922">1922</option>
                     <option value="1921">1921</option>
                     <option value="1920">1920</option>
                     <option value="1919">1919</option>
                     <option value="1918">1918</option>
                     <option value="1917">1917</option>

               </select>
              </div>
              <!--</div>-->



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
						<div class="form-group col-lg-6">
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
