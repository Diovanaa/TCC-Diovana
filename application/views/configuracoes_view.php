
<div class="col-lg-12"><!-- cabeçalho-->
    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top cor1">
      <div class="container cor1">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?=site_url('home')?>">HemoUnião</a>

        </div>
        <div id="navbar" class="navbar-collapse collapse ">
          <ul class="nav navbar-nav pull-right " >

						<li><a data-toggle="modal" href="<?=site_url('Painel_doador/sair')?>" >

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
                        <li><a href="<?=site_url('painel_doador/Index')?>"><i class="fa fa-home " aria-hidden="true"></i>Home</a></li>
                        <li><a href="<?=site_url('painel_doador/carregaPerfilDoador')?>"><i class="fa fa-user" aria-hidden="true"></i>Perfil</a></li>
                        <li><a href="<?=site_url('doacoes/index')?>"><i class="fa fa-plus " aria-hidden="true"></i>Add Doação</a></li>
                        <li><a href="<?=site_url('painel_doador/carregaMinhasDoacoes')?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Minhas Doações</a></li>
                        <li class="ativo"><a class"ativo" href="<?=site_url('painel_doador/editaPerfilDoador')?>"><i class="fa fa-cog" aria-hidden="true"></i>Configurações</a></li>
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
                                <h2>Olá, Doador </h2>

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
                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">Meu Perfil</h1>
        <div class="row">
          <div class="col-sm-12  col-xs-12 ">

            <div class="sales">
              <!-- -->

              <form action="<?=site_url('Painel_doador/Editar')?>" method="post">
                <div class="row">

                  <div class="col-sm-12">
                    <div class="form-group col-sm-6">
                      <label for="exampleInputEmail1">Nome</label>
                      <input
                      type="text" class="form-control" name="nome"
                      placeholder="Nome" value="<?php echo $dadosVoluntario->nome ?>"  />
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Telefone</label>
                        <input type="tel" class="form-control"
                        name="telefone" placeholder="telefone"
                        value="<?php echo $dadosVoluntario->telefone ?>" required/>
                      </div>
                    </div>
                    <input type="hidden" name="email" value="<?php echo $dadosVoluntario->email ?>">
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group col-sm-6">
                      <label for="exampleInputEmail1">Email</label>
                      <input
                      type="email" class="form-control" name=""
                      placeholder="Email" value="<?php echo $dadosVoluntario->email ?>" disabled  />
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control"
                        name="senha_voluntario" placeholder="senha"
                        value="" />
                      </div>
                    </div>

                  </div>

                </div>

                <button type="submit" class="btn btn-primary pull-right">
                  SALVAR
                  ALTERAÇÕES
                </button>

              </form>
            </div>

          </div>

        </div>

      </div>
    </div>
                </div>
            </div>
        </div>

</div>
