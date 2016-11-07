

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/index')?>"><i class="fa fa-home " aria-hidden="true"></i> Home</a></li>
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a></li>
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/agenda')?>"><i class="fa fa-calendar " aria-hidden="true"></i> Agenda</a></li>
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/carregarCadastroEstoque')?>"><i class="fa fa-plus " aria-hidden="true"></i> Novo Estoque</a></li>
              <li class="active"><a class="fonte2" href="<?=site_url('Painel_hemocentro/carregaMeuEstoque')?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Meu Estoque</a></li>
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/localizarDoadores')?>"><i class="fa fa-plus" aria-hidden="true"></i> Procurar Doadores</a></li>
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/editaPerfilHemocentro')?>"><i class="fa fa-cog" aria-hidden="true"></i> Configurações</a></li>
          </ul>


        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header"><?php echo $dadosHemocentro->nome; ?></h1>
            <div class="panel panel-default panel-table">
                <div class="panel-heading ">
                    <div class="row ">
                        <div class="col col-xs-6">
                            <h1 class="panel-title">Editar estoque</h1>
                        </div>
                        <div class="col col-xs-6 text-right">
                            <form action="<?= site_url('Painel_hemocentro/AtualizarEstoque') ?>" method="post">
                                <input type="hidden" name="id_estoque" value="<?php echo $dadosEstoque->id_estoque ?>">
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
                                    <td class="hidden-xs"><b>Tipo A-</b></td>
                                    <td>

                                        <input type="text" id="sangue_tipoA-" name="estoquetipo_a0" placeholder="Tipo A-"
                                        value="<?php echo $dadosEstoque->tipo_a0 ?>" class="form-control" required  />
                                    </td>
                                    <td align="center">



                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td class="hidden-xs"><b>Tipo A+</b></td>
                                    <td>
                                        <input type="text" id="sangue_tipoA+" name="estoquetipo_a1" placeholder="Tipo A+"
                                        value="<?php echo $dadosEstoque->tipo_a1 ?>" class="form-control" required  />
                                    </td>
                                    <td align="center">



                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td class="hidden-xs"><b>Tipo B-</b></td>
                                    <td>

                                        <input type="text" id="sangue_tipoB-" name="estoquetipo_b0" placeholder="Tipo B-"
                                        value="<?php echo $dadosEstoque->tipo_b0 ?>" class="form-control" required  />
                                    </td>
                                    <td align="center">



                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td class="hidden-xs"><b>Tipo B+</b></td>
                                    <td>
                                        <input type="text" id="sangue_tipoB+" name="estoquetipo_b1" placeholder="Tipo B+"
                                        value="<?php echo $dadosEstoque->tipo_b1 ?>" class="form-control" required  />
                                    </td>
                                    <td align="center">



                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td class="hidden-xs"><b>Tipo AB-</b></td>
                                    <td>

                                      <input type="text" id="sangue_tipoAB-" name="estoquetipo_ab0" placeholder="Tipo AB-"
                                      value="<?php echo $dadosEstoque->tipo_ab0 ?>" class="form-control" required  />
                                    </td>
                                    <td align="center">



                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td class="hidden-xs"><b>Tipo AB+</b></td>
                                    <td>
                                      <input type="text" id="sangue_tipoAB+" name="estoquetipo_ab1" placeholder="Tipo AB+"
                                      value="<?php echo $dadosEstoque->tipo_ab1 ?>" class="form-control" required  />
                                    </td>
                                    <td align="center">



                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td class="hidden-xs"><b>Tipo O-</b></td>
                                    <td>

                                      <input type="text" id="sangue_tipoO-" name="estoquetipo_o0" placeholder="Tipo O-"
                                      value="<?php echo $dadosEstoque->tipo_o0 ?>" class="form-control" required  />
                                    </td>
                                    <td align="center">



                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td class="hidden-xs"><b>Tipo AB+</b></td>
                                    <td>
                                      <input type="text" id="sangue_tipoO+" name="estoquetipo_o1" placeholder="Tipo O+"
                                      value="<?php echo $dadosEstoque->tipo_o1 ?>" class="form-control" required  />
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
