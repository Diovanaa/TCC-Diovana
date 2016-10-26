

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a class="fonte2" href="<?= site_url('painel_doador/index') ?>"><i class="fa fa-home " aria-hidden="true"></i> Home</a></li>
                <li><a class="fonte2" href="<?= site_url('painel_doador/carregarPerfil') ?>"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a></li>
                <li><a class="fonte2" href="<?= site_url('painel_doador/carregarCadastroDoacao') ?>"><i class="fa fa-plus " aria-hidden="true"></i> Nova Doação</a></li>
                <li><a class="fonte2" href="<?= site_url('painel_doador/carregaMinhasDoacoes') ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Minhas Doações</a></li>
                <li class="active"><a class="fonte2" href="<?= site_url('painel_doador/editaPerfilDoador') ?>"><i class="fa fa-cog" aria-hidden="true"></i> Configurações</a></li>
                <li><a class="fonte2" href="<?=site_url('painel_doador/localizarHemocentros')?>"><i class="fa fa-map-marker" aria-hidden="true"></i> Hemocentros</a></li>
            </ul>


        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header"><?php echo $dadosDoador->nome; ?></h1>

            <div class="panel panel-default panel-table">
                <div class="panel-heading ">
                    <div class="row ">
                        <div class="col col-xs-6">
                            <h1 class="panel-title">Editar Dados Pessoais</h1>
                        </div>
                        <div class="col col-xs-6 text-right">
                            <form action="<?= site_url('Painel_doador/AtualizarDadosPessoais') ?>" method="post">
                                <button type="submit" class="btn btn-primary" >
                                    Salvar
                                </button>
                        </div>
                    </div>
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th class="hidden-xs"></th>

                                </tr>
                            </thead>


                            <tbody>
                                <tr>

                                    <td class="hidden-xs"><b>Nome</b></td>
                                    <td><input type="text" class="form-control" name="doador_nome" placeholder="Nome" value="<?php echo $dadosDoador->nome ?>" />
                                    </td>
                                    <td align="center">



                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>

                                    <td class="hidden-xs"><b>Telefone</b></td>
                                    <td><input type="text"
                                               class="form-control" name="doador_telefone"
                                               placeholder="Telefone"
                                               value="<?php echo $dadosDoador->telefone ?>" required></td>
                                    <td align="center">

                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>

                                    <td class="hidden-xs"><b>Sexo</b></td>
                                    <td>
                                        <select class="form-control" name="doador_sexo" id="sexo">
                                            <option value="Feminino">Feminino</option>
                                            <option value="Masculino">Masculino</option>
                                        </select>
                                    </td>
                                    <td align="center">

                                    </td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr>

                                    <td class="hidden-xs"><b>Data de Nascimento</b></td>
                                    <td>



                                          <div class="col-md-4 col-lg-4 - col-xs-12">

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
                                    <div class="col-md-4 col-lg-4 - col-xs-12">

                                      <select class=" form-control" name="doador_data_mes" id="data_mes">

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
                                    <div class="col-md-4 col-lg-4 - col-xs-12">
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



                                    </td>
                                    <td align="center">

                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>

                                    <td class="hidden-xs"><b>Tipo Sanguíneo</b></td>
                                    <td >
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
                                    </td>
                                    <td align="center">

                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </form>

                </div>

            </div>



            <div class="panel panel-default panel-table">
                <div class="panel-heading ">
                    <div class="row ">
                        <div class="col col-xs-6">
                            <h1 class="panel-title">Editar Endereço</h1>
                        </div>
                        <div class="col col-xs-6 text-right">
                            <form action="<?= site_url('Painel_doador/AtualizarEndereco') ?>" method="post">
                                <button type="submit" class="btn btn-primary" >
                                    Salvar
                                </button>
                        </div>
                    </div>
                </div>
                <div class="panel-body">




                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th class="hidden-xs"></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td class="hidden-xs"><b>Estado</b></td>
                                    <td >  <select class="form-control" name="doador_estado" id="estadoDoador">
                                            <!-- <option value="<?php echo $dadosDoador->estado; ?>"><?php echo $dadosDoador->estado; ?></option> -->
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
                                    </td>
                                    <td align="center">

                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>

                                    <td class="hidden-xs"><b>Cidade</b></td>
                                    <td > <input type="text"
                                                 class="form-control" name="doador_cidade"
                                                 placeholder="Cidade"
                                                 value="<?php echo $dadosDoador->cidade ?>" required></td>
                                    <td align="center">

                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>

                                    <td class="hidden-xs"><b>Endereço</b></td>
                                    <td > <input type="text"
                                                 class="form-control" name="doador_endereco"
                                                 placeholder="Endereço"
                                                 value="<?php echo $dadosDoador->endereco ?>" required></td>
                                    <td align="center">

                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </form>

                </div>

            </div>


            <div class="panel panel-default panel-table">
                <div class="panel-heading ">
                    <div class="row ">
                        <div class="col col-xs-6">
                            <h1 class="panel-title">Editar Dados</h1>
                        </div>
                        <div class="col col-xs-6 text-right">
                            <form action="<?= site_url('Painel_doador/AtualizarSenha') ?>" method="post">
                                <button type="submit" class="btn btn-primary" >
                                    Salvar
                                </button>
                        </div>

                    </div>
                </div>
                <div class="panel-body">


                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th class="hidden-xs"></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td class="hidden-xs"><b>Email</b></td>
                                    <td><input
                                            type="email" class="form-control" name=""
                                            placeholder="Email" value="<?php echo $dadosDoador->email ?>" disabled  />
                                        </div>
                                        <input type="hidden" name="doador_email" value="<?php echo $dadosDoador->email ?>">
                                        </div></td>
                                    <td align="center">


                                    </td>
                                </tr>
                            </tbody>


                            <tbody>
                                <tr>

                                    <td class="hidden-xs"><b>Senha</b></td>
                                    <td ><input type="password" class="form-control"
                                                name="doador_senha" placeholder="Nova senha"
                                                value="" required/></td>
                                    <td align="center">

                                    </td>
                                </tr>
                            </tbody>


                            <tbody>
                                <tr>

                                </tr>
                            </tbody>

                        </table>
                        </form>
                    </div>


                </div>



            </div>
            <div class="panel panel-default panel-table">
                <div class="panel-heading ">
                    <div class="row ">
                        <div class="col col-xs-6">
                            <h1 class="panel-title">Editar Doação</h1>
                        </div>
                        <div class="col col-xs-6 text-right">
                            <form action="<?= site_url('Painel_doador/AtualizarDoacao') ?>" method="post">
                                <button type="submit" class="btn btn-primary" >
                                    Salvar
                                </button>
                        </div>
                    </div>
                </div>


        </div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?= base_url('assets/js/jquery-1.10.2.js') ?>"></script>
<script type="text/javascript">
    $('#sexo').val('<?php echo $dadosDoador->sexo; ?>');
    $('#tipoSanguineo').val('<?php echo $dadosDoador->tipo_sanguineo; ?>');
    $('#estadoDoador').val('<?php echo $dadosDoador->estado; ?>');
    $('#data_dia').val('<?php echo $dadosDoador->data_dia; ?>');
    $('#data_mes').val('<?php echo $dadosDoador->data_mes; ?>');
    $('#data_ano').val('<?php echo $dadosDoador->data_ano; ?>');
    $('#tipoDoacao').val('<?php echo $dadosDoacao->tipo_doacao; ?>');
    $('#doacao_dia').val('<?php echo $dadosDoacao->doacao_dia; ?>');
    $('#doacao_mes').val('<?php echo $dadosDoacao->doacao_mes; ?>');
    $('#doacao_ano').val('<?php echo $dadosDoacao->doacao_ano; ?>');
    $('#ultima_dia').val('<?php echo $dadosDoacao->ultima_dia; ?>');
    $('#ultima_mes').val('<?php echo $dadosDoacao->ultima_mes; ?>');
    $('#ultima_ano').val('<?php echo $dadosDoacao->ultima_ano; ?>');
</script>
</body>
</html>
