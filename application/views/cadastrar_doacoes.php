
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
<!-- tela de adicionar uma nova doação-->
    <div class="container-fluid display-table ">
        <div class="row display-table-row ">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box cor1 " id="navigation">

                <div class="navi">
                    <ul>
                        <li><a href="<?=site_url('painel_doador2/index')?>"><i class="fa fa-home " aria-hidden="true"></i>Home</a></li>
                        <li><a href="<?=site_url('painel_doador2/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i>Perfil</a></li>
                        <li class="ativo"><a class="ativo" href="#"><i class="fa fa-plus " aria-hidden="true"></i>Add Doação</a></li>
                        <li><a href="<?=site_url('painel_doador2/carregaMinhasDoacoes')?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Minhas Doações</a></li>
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
                                <h2>Adicionar doação </h2>

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
                        <form action="<?=site_url('Painel_doador2/salvarDoacao')?>" method="post">
                              <!-- Entrada nome doador-->
                              <div class="form-group col-lg-6">
                                    <label for="nomeHemocentro">Nome Hemocentro*:</label>
                                    <input type="text" id="nomeHemocentro" name="hemocentro_nome" placeholder="Nome do Hemocentro"
                                    value="" class="form-control" required  />
                              </div>
                              <!-- Seleção do tipo sanguineo do doador-->
                              <div class="form-group col-lg-6">
                                  <label for="tipoDoacao">Tipo de Doação*:</label>
                                       <select class="form-control" name="doacao_tipodoacao" id="tipoDoacao">
                                            <option>Doação de sangue total</option>
                                            <option>Doação por aferise</option>
                                            <option>Doação de medula óssea</option>

                                      </select>
                             </div>
                              <!-- Entrada data de nascimento do doador-->
                              <div class="form-group col-lg-6">
                                   <label for="dataDoacao">Data da doação*:</label>
                                   <input type="date" id="dataDoacao" name="doacao_datadoacao"
                                   value="" class="form-control" required placeholder="Data da doação" />
                              </div>
                              <!-- Entrada telefone do doador-->
                              <div class="form-group col-lg-6">
                                   <label for="ultimaDoacao">Data ultima doação*:</label>
                                   <input type="date" id="ultimaDoacao" name="doacao_ultimadoacao" placeholder="Data da ultima doação"
                                   value="" class="form-control" required  />
                              </div>

                          <h5>*Campos obrigatórios</h5>
                          <!-- Botão para cadastrar-->
                          <div class="col-lg-3">
                                <button type="submit" class="btn btn-danger">
                                       Salvar
                                </button>

                          </div>

                          <br>
                          <br>
                        </form><!-- Fecha formulário-->
                      </div>

                    </div>

                </div>

                </div>
            </div>
        </div>