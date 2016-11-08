

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a class="fonte2" href="<?= site_url('painel_doador/index') ?>"><i class="fa fa-home " aria-hidden="true"></i> Home</a></li>
                <li><a class="fonte2" href="<?= site_url('painel_doador/carregarPerfil') ?>"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a></li>
                  <li><a class="fonte2" href="<?= site_url('painel_doador/localizarHemocentros') ?>"><i class="fa fa-map-marker" aria-hidden="true"></i> Hemocentros</a></li>
                <li class="active"><a class="fonte2" href="<?= site_url('painel_doador/carregarCadastroDoacao') ?>"><i class="fa fa-plus " aria-hidden="true"></i> Nova Doação</a></li>
<li><a class="fonte2" href="<?=site_url('painel_doador/mensagens')?>"><i class="fa fa-envelope " aria-hidden="true"></i> Mensagens</a></li>
              <!--  <li><a class="fonte2" href="<?= site_url('painel_doador/carregaMinhasDoacoes') ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Minhas Doações</a></li>-->
                <li ><a class="fonte2" href="<?= site_url('painel_doador/editaPerfilDoador') ?>"><i class="fa fa-cog" aria-hidden="true"></i> Configurações</a></li>


            </ul>


        </div>
        <div  class="col-sm-9 col-sm-offset-2 row">

                              <?php if ($this->input->get('alerta') == 4) { ?>
                              <div class="alert alert-success">
                                Doação alterada com sucesso!!!
                              </div>
                              <?php } ?>
                  </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header"><?php echo $dadosDoador->nome; ?></h1>
            <div class="panel panel-default panel-table">
                <div class="panel-heading ">
                    <div class="row ">
                        <div class="col col-xs-6">
                            <h1 class="panel-title">Editar Doação</h1>
                        </div>
                        <div class="col col-xs-6 text-right">
                            <form action="<?= site_url('Painel_doador/AtualizarDoacao') ?>" method="post">
                                <input type="hidden" name="id_doacao" value="<?php echo $dadosDoacao->id_doacao ?>">
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
                                    <td class="hidden-xs"><b>Nome Hemocentro</b></td>
                                    <td>
                                        <input type="text" class="form-control" name="hemocentro_nome" placeholder="Nome Hemocentro" value="<?php echo $dadosDoacao->hemocentro_nome ?>" />
                                    </td>
                                    <td align="center">



                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>

                                    <td class="hidden-xs"><b>Tipo de doação</b></td>
                                    <td >
                                        <select class="form-control" name="doacao_tipodoacao" id="tipoDoacao">
                                            <option>Sangue total</option>
                                            <option>Plaquetas por aferise</option>
                                            <option>Autodoação</option>
                                            <option>Doação de medula óssea</option>
                                        </select>
                                    </td>

                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td class="hidden-xs"><b>Data da doação</b></td>
                                    <td>
                                        <input type="date" class="form-control" name="data_doacao" placeholder="Data da doação" value="<?php echo $dadosDoacao->data_doacao ?>" />
                                    </td>
                                    <td align="center">



                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td class="hidden-xs"><b>Data da úlima doação</b></td>
                                    <td>
                                        <input type="date" class="form-control" name="data_ultima" placeholder="Data da doação" value="<?php echo $dadosDoacao->data_ultima ?>" />
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
    $('#tipoDoacao').val('<?php echo $dadosDoacao->tipo_doacao; ?>');
  </script>
<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
<script>
    webshims.setOptions('forms-ext', {types: 'date'});
webshims.polyfill('forms forms-ext');
</script>

</body>
</html>
