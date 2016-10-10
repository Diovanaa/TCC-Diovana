
<div class="col-lg-12"><!-- cabeçalho-->
      <nav class="navbar navbar-inverse navbar-fixed-top cor1">  <!-- navbar -->
      <div class="container cor1">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">HemoUnião</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse ">
          <ul class="nav navbar-nav pull-right " >
            <!-- sai do sistema -->
						<li><a data-toggle="modal" href="<?=site_url('Painel_hemocentro/deslogar')?>" >
	          <i class="" aria-hidden="true"></i>	 Sair</a></li>
          </ul>
        </div>
      </div>
    </nav><!-- fecha  navbar-->
</div><!-- fecha  cabeçalho-->
</br>
</br>
</br>
<!--PAGINA DE HOME HEMOCENTRO -->
    <div class="container-fluid display-table ">
        <div class="row display-table-row ">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box cor1 " id="navigation">

                <div class="navi">
                    <ul>
                      <li><a href="<?=site_url('Painel_hemocentro/index')?>"><i class="fa fa-home " aria-hidden="true"></i>Home</a></li>
                      <li><a href="<?=site_url('Painel_hemocentro/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i>Perfil</a></li>
                      <li ><a href="<?=site_url('Painel_hemocentro/carregarCadastroEstoque')?>"><i class="fa fa-plus " aria-hidden="true"></i>Nova Doação</a></li>
                      <li><a href="<?=site_url('Painel_hemocentro/carregaMeuEstoque')?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Meu Estoque</a></li>
                      <li><a href="<?=site_url('Painel_hemocentro/carregaMeuEstoque')?>"><i class="fa fa-plus" aria-hidden="true"></i>Procurar Doadores</a></li>
                      <li><a href="<?=site_url('Painel_hemocentro/editaPerfilHemocentro')?>"><i class="fa fa-cog" aria-hidden="true"></i>Configurações</a></li>


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
                                <h2>Faltas 5 dias para uma nova doação

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



                </div>

                </div>
            </div>
        </div>
