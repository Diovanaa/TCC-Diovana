

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
                <li><a class="fonte2" href="<?=site_url('painel_doador/doarAqui')?>"><i class="fa fa-map-marker" aria-hidden="true"></i> Doar em um hemocentros</a></li>
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

                                    <td class="hidden-xs"><b>Data de nascimento</b></td>
                                    <td><input type="date"
                                               class="form-control" name="doador_data_nascimento"
                                               placeholder="Data de Nascimento"
                                               value="<?php echo $dadosDoador->data_nascimento ?>" required></td>
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






<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?= base_url('assets/js/jquery-1.10.2.js') ?>"></script>
<script type="text/javascript">
    $('#sexo').val('<?php echo $dadosDoador->sexo; ?>');
    $('#tipoSanguineo').val('<?php echo $dadosDoador->tipo_sanguineo; ?>');
    $('#estadoDoador').val('<?php echo $dadosDoador->estado; ?>');
  </script>
  <script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
  <script>
      webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
  </script>

</body>
</html>
