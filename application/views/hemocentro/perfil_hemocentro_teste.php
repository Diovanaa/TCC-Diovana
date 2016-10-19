
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="<?= site_url('Painel_hemocentro/index') ?>"><i class="fa fa-home " aria-hidden="true"></i> Home</a></li>
                <li class="ativo"><a href="<?= site_url('Painel_hemocentro/carregarPerfil') ?>"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a></li>
                <li ><a href="<?= site_url('Painel_hemocentro/carregarCadastroEstoque') ?>"><i class="fa fa-plus " aria-hidden="true"></i> Novo Estoque</a></li>
                <li><a href="<?= site_url('Painel_hemocentro/carregaMeuEstoque') ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Meu Estoque</a></li>
                <li><a href="<?= site_url('Painel_hemocentro/carregaMeuEstoque') ?>"><i class="fa fa-plus" aria-hidden="true"></i> Procurar Doadores</a></li>
                <li><a href="<?= site_url('Painel_hemocentro/editaPerfilHemocentro') ?>"><i class="fa fa-cog" aria-hidden="true"></i> Configurações</a></li>
            </ul>


        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Hemocentro</h1>

            <div class="panel panel-default panel-table">
                <div class="panel-heading ">
                    <div class="row ">
                        <div class="col col-xs-6">
                            <h1 class="panel-title">Meus dados</h1>
                        </div>
                        <div class="col col-xs-6 text-right">


                             <!--  <a href="<?= site_url('Painel_hemocentro/carregaMeuEstoque') ?>">
                             </a>-->

                            <a href="<?= site_url('Painel_hemocentro/editaPerfilHemocentro') ?>" class="btn btn-danger">Editar</a>

                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table">

                        <tbody id="myTable">
                            <tr>
                                <td><b>Nome:</b> </td>
                                <td> <?php echo $dadosHemocentro->nome; ?> </td>
                            </tr>
                        </tbody>
                        <tbody id="myTable">
                            <tr>
                                <td> <b>Telefone:</b></td>
                                <td> <?php echo $dadosHemocentro->telefone; ?> </td>
                            </tr>
                        </tbody>
                        <tbody id="myTable">
                            <tr>
                                <td><b>Estado:</b> </td>
                                <td> <?php echo $dadosHemocentro->estado; ?> </td>
                            </tr>
                        </tbody>
                        <tbody id="myTable">
                            <tr>
                                <td><b>Cidade:</b> </td>
                                <td> <?php echo $dadosHemocentro->cidade; ?> </td>
                            </tr>
                        </tbody>
                        <tbody id="myTable">
                            <tr>
                                <td> <b>Endereço:</b></td>
                                <td> <?php echo $dadosHemocentro->endereco; ?> </td>
                            </tr>
                        </tbody>
                        <tbody id="myTable">
                            <tr>
                                <td> <b>Bairro:</b></td>
                                <td> <?php echo $dadosHemocentro->bairro; ?> </td>
                            </tr>
                        </tbody>
                        <tbody id="myTable">
                            <tr>
                                <td> <b>CEP:</b></td>
                                <td> <?php echo $dadosHemocentro->cep; ?> </td>
                            </tr>
                        </tbody>

                        <tbody>
                            <tr>

                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>






        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

<script src="../../assets/js/vendor/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
