
<div class="col-lg-12"><!-- cabeçalho-->
    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top cor1">
      <div class="container cor1">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">HemoUnião</a>

        </div>
        <div id="navbar" class="navbar-collapse collapse ">
          <ul class="nav navbar-nav pull-right " >

						<li><a data-toggle="modal" href="<?=site_url('Painel_doador2/deslogar')?>" >

	              <i class="" aria-hidden="true"></i>	 Sair</a></li>
      </div>
    </nav>
</div><!-- fecha  cabeçalho-->
</br>
</br>
</br>
    <div class="container-fluid display-table ">
        <div class="row display-table-row ">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box cor1 " id="navigation">

                <div class="navi">
                    <ul>
                        <li><a href="<?=site_url('painel_doador2/index')?>"><i class="fa fa-home " aria-hidden="true"></i>Home</a></li>
                        <li><a href="<?=site_url('painel_doador2/carregaPerfilDoador')?>"><i class="fa fa-user" aria-hidden="true"></i>Perfil</a></li>
                        <li ><a href="<?=site_url('painel_doador2/carregarCadastroDocao')?>"><i class="fa fa-plus " aria-hidden="true"></i>Add Doação</a></li>
                        <li class="ativo"><a href="<?=site_url('painel_doador2/carregaMinhasDoacoes')?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Minhas Doações</a></li>
                        <li><a href="<?=site_url('painel_doador2/editaPerfilDoador')?>"><i class="fa fa-cog" aria-hidden="true"></i>Configurações</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            <div class="search hidden-xs hidden-sm">
                                <h2>Minhas Doações </h2>

                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                  <li>

              </li>

                                </ul>
                            </div>
                        </div>
                    </header>


                    <div class="col-lg-12">
                      <div class="col-lg-7">

                      </div>

                    </div>

                </div>
                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

                <div class="container">
                    <div class="row">



                        <div class="col-md-10 ">

                            <div class="panel panel-default panel-table">
                              <div class="panel-heading ">
                                <div class="row ">
                                  <div class="col col-xs-6">
                                    <h3 class="panel-title"></h3>
                                  </div>
                                  <div class="col col-xs-6 text-right">


                                      <a href="<?=site_url('painel_doador2/carregaMinhasDoacoes')?>">  <button type="button" class="btn btn-sm btn-danger btn-create">Add Doação</button></a>
                                  </div>
                                </div>
                              </div>
                              <div class="panel-body">
                                <?php foreach ($dadosDoacao as $key): ?>
                                <table class="table table-striped table-bordered table-list">
                                  <thead>
                                    <tr>

                                        <th class="hidden-xs">ID</th>
                                        <th>Tipo doação</th>
                                        <th>
                                          Nome Hemocentro
                                        </th>
                                        <th>Data Doação</th>
                                        <th><em class="fa fa-cog"></em></th>
                                    </tr>
                                  </thead>



                                  <tbody>
                                          <tr>

                                            <td class="hidden-xs">1</td>
                                            <td><?php echo $key->tipo_doacao; ?></td>
                                            <td>
                                              <?php echo $key->hemocentro_nome; ?>
                                            </td>
                                            <td><?php echo $key->data_doacao; ?></td>
                                            <td align="center">
                                              <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                              <a class="btn btn-default"><em class="fa fa-trash"></em></a>
                                            </td>
                                          </tr>
                                        </tbody>
                                </table>
                                <?php endforeach; ?>

                              </div>
                              <div class="panel-footer ">
                                <div class="row">
                                <!--  <div class="col col-xs-4">Page 1 of 5
                                  </div>
                                  <div class="col col-xs-8">
                                    <ul class="pagination hidden-xs pull-right">
                                      <li><a href="#">1</a></li>
                                      <li><a href="#">2</a></li>
                                      <li><a href="#">3</a></li>
                                      <li><a href="#">4</a></li>
                                      <li><a href="#">5</a></li>
                                    </ul>
                                    <ul class="pagination visible-xs pull-right">
                                        <li><a href="#">«</a></li>
                                        <li><a href="#">»</a></li>
                                    </ul>
                                  </div>-->
                                </div>
                              </div>
                            </div>

                </div></div></div>
                </div>
            </div>
        </div>
