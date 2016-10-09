
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
</br><!-- home doador pagina de home-->
    <div class="container-fluid display-table ">
        <div class="row display-table-row ">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box cor1 " id="navigation">

                <div class="navi">
                    <ul>
                        <li ><a href="<?=site_url('painel_doador2/index')?>"><i class="fa fa-home " aria-hidden="true"></i>Home</a></li>
                        <li class="ativo"><a href="<?=site_url('painel_doador2/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i>Perfil</a></li>
                        <li ><a href="<?=site_url('painel_doador2/carregarCadastroDoacao')?>"><i class="fa fa-plus " aria-hidden="true"></i>Nova Doação</a></li>
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
<h1><?php echo $dadosDoador->nome ?></h1>
																<h2></h2>

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

<div class="container">
    <div class="row">



        <div class="col-md-10 ">

            <div class="panel panel-default panel-table">
              <div class="panel-heading ">
                <div class="row ">
                  <div class="col col-xs-6">
                    <h1 class="panel-title">Meus dados</h1>
                  </div>
                  <div class="col col-xs-6 text-right">


                      <a href="<?=site_url('painel_doador2/carregaMinhasDoacoes')?>">
                          </a>

                            <a href="<?=
                            site_url('painel_doador2/editaPerfilDoador')?>" class="btn btn-danger">Editar</a>

                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table">

                <tbody id="myTable">
                <tr>
                  <td><b>Nome:</b> </td>
                  <td> <?php echo $dadosDoador->nome;?> </td>
                </tr>
                </tbody>
                <tbody id="myTable">
                <tr>
                  <td> <b>Telefone:</b></td>
                  <td> <?php echo $dadosDoador->telefone;?> </td>
                </tr>
                </tbody>
                <tbody id="myTable">
                <tr>
                  <td><b>Sexo:</b> </td>
                  <td> <?php echo $dadosDoador->sexo;?> </td>
                </tr>
                </tbody>
                <tbody id="myTable">
                <tr>
                  <td><b>Data de nascimento:</b> </td>
                  <td> <?php echo $dadosDoador->data_nascimento;?> </td>
                </tr>
                </tbody>
                <tbody id="myTable">
                <tr>
                  <td> <b>Tipo Sanguíneo:</b></td>
                  <td> <?php echo $dadosDoador->tipo_sanguineo;?> </td>
                </tr>
                </tbody>
                <tbody id="myTable">
                <tr>
                  <td> <b>Estado:</b></td>
                  <td> <?php echo $dadosDoador->estado;?> </td>
                </tr>
                </tbody>
                <tbody id="myTable">
                <tr>
                  <td> <b>Cidade:</b></td>
                  <td> <?php echo $dadosDoador->cidade;?> </td>
                </tr>
                </tbody>
                <tbody id="myTable">
                <tr>
                  <td><b> Endereço:</b></td>
                  <td> <?php echo $dadosDoador->endereco;?> </td>
                </tr>
                </tbody>
                <tbody>
                  <tr>

                  </tr>
                </tbody>
                </table>

              </div>

            </div>

</div></div></div>
<div class="container">
    <div class="row">



        <div class="col-md-10 ">

            <div class="panel panel-default panel-table">
              <div class="panel-heading ">
                <div class="row ">
                  <div class="col col-xs-6">
                    <h1 class="panel-title">Minhas Doações</h1>
                  </div>
                  <div class="col col-xs-6 text-right">


                      <a href="<?=site_url('painel_doador2/carregaMinhasDoacoes')?>">
                          </a>

                            <a href="<?=
                            site_url('painel_doador2/carregarCadastroDoacao')?>" class="btn btn-danger">Nova Doação</a>

                  </div>
                </div>
              </div>
              <div class="panel-body">

                <table class="table">
                <thead>
                    <tr>
                        <th>Nome Hemocentro</th>
                        <th>
                          Tipo doação
                        </th>
                        <th>Data Doação</th>
                        <th>Data Ultima Doação</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                <?php if (!empty($dadosDoacao)):
                   foreach ($dadosDoacao as $row): ?>
                            <td>
                              <?php echo $row->hemocentro_nome;?>
                            </td>
                            <td>
                              <?php echo $row->tipo_doacao;?>
                            </td>
                            <td><?php echo $row->data_doacao; ?></td>
                            <td><?php echo $row->data_ultimadoacao; ?></td>
                            <td>
                              <a class="btn btn-primary"><em class="fa fa-pencil"></em></a>
                              <a  href="<?= site_url('painel_doador2/excluir/' . $row->id_doacao . '/' . $row->id_doador ) ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Têm certeza que deseja excluir esta informação?')">
                                  <i class="fa fa-trash" aria-hidden="true"></i>
                              </a>

                            </td>


                      </tr>
                            <?php endforeach; ?>
                          <?php else: {
                            echo "<td colspan='5' align = 'center'>
                          Você não tem nenhuma Doação
                                      </td>";
                          } ?>
                          <?php	endif; ?>
                </tbody>

                </table>

              </div>

            </div>

</div></div></div>


	</div>
		                </div>

		                </div>
		            </div>
		        </div>
