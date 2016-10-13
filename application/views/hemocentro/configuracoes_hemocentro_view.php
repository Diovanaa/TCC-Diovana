
<div class="col-lg-12"><!-- cabeçalho-->
    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top cor1">
      <div class="container cor1">
        <div class="navbar-header">
<a class="navbar-brand" href="#">HemoUnião</a>

        </div>
        <div id="navbar" class="navbar-collapse collapse ">
          <ul class="nav navbar-nav pull-right " >

						<li><a data-toggle="modal" href="<?=site_url('Painel_hemocentro/deslogar')?>" >

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
                    <li><a href="#"><i class="fa fa-home " aria-hidden="true"></i>Home</a></li>
                    <li><a href="<?=site_url('Painel_hemocentro/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i>Perfil</a></li>
                    <li ><a href="<?=site_url('Painel_hemocentro/carregarCadastroEstoque')?>"><i class="fa fa-plus " aria-hidden="true"></i>Novo Estoque</a></li>
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
<h1><?php echo $dadoshemocentro->nome ?></h1>
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



				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-0 main">

					<div class="row">
						<div class="col-md-12 col-sm-5 col-xs-12 ">

						</br>
								<!-- -->


      <form action="<?=site_url('Painel_hemocentro/Atualizar') ?>" method="post">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>

                        <th class="hidden-xs">Alterar dados do Hemocentro</th>

                    </tr>
                  </thead>


                        <tbody>
                          <tr>

                            <td class="hidden-xs"><b>Nome</b></td>
                            <td><input type="text" class="form-control" name="hemocentro_nome" placeholder="Nome" value="<?php echo $dadosHemocentro->nome ?>" />
                            </td>
                            <td align="center">
                              <button type="submit" class="btn btn-danger " >
                                <a  class="fa fa-pencil"></a>
                              </button>


                            </td>
                          </tr>
                        </tbody>
                        <tbody>
                                <tr>

                                  <td class="hidden-xs"><b>Telefone</b></td>
                                  <td><input type="text"
                                  class="form-control" name="hemocentro_telefone"
                                  placeholder="Telefone"
                                  value="<?php echo $dadosHemocentro->telefone ?>" required></td>
                                  <td align="center">
                                    <button type="submit" class="btn btn-danger" >
                                      <a  class="fa fa-pencil"></a>
                                    </button>
                                  </td>
                                </tr>
                              </tbody>
                              <tbody>
                                      <tr>

                                        <td class="hidden-xs"><b>Estado</b></td>
                                        <td><input type="text"
                                        class="form-control" name="hemocentro_estado"
                                        placeholder="Estado"
                                        value="<?php echo $dadosHemocentro->estado ?>" required></td>
                                        <td align="center">
                                          <button type="submit" class="btn btn-danger" >
                                            <a  class="fa fa-pencil"></a>
                                          </button>
                                        </td>
                                      </tr>
                                    </tbody>

                              <tbody>
                                      <tr>

                                        <td class="hidden-xs"><b>Cidade</b></td>
                                        <td><input type="text" class="form-control"
                                        name="hemocentro_cidade" placeholder="Cidade"
                                        value="<?php echo $dadosHemocentro->cidade ?>" required></td>
                                        <td align="center">
                                          <button type="submit" class="btn btn-danger" >
                                            <a  class="fa fa-pencil"></a>
                                          </button>
                                        </td>
                                      </tr>
                                    </tbody>
                                    <tbody>
                                            <tr>

                                              <td class="hidden-xs"><b>Endereço</b></td>
                                              <td > <input type="text"
                                              class="form-control" name="hemocentro_endereco"
                                              placeholder="Endereço"
                                              value="<?php echo $dadosHemocentro->endereco ?>" required></td>
                                              <td align="center">
                                                <button type="submit" class="btn btn-danger" >
                                                  <a  class="fa fa-pencil"></a>
                                                </button>
                                              </td>
                                            </tr>
                                          </tbody>
                                          <tbody>
                                                  <tr>

                                                    <td class="hidden-xs"><b>Bairro</b></td>
                                                    <td > <input type="text"
                                                    class="form-control" name="hemocentro_bairro"
                                                    placeholder="Bairro"
                                                    value="<?php echo $dadosHemocentro->bairro ?>" required></td>
                                                    <td align="center">
                                                      <button type="submit" class="btn btn-danger" >
                                                        <a  class="fa fa-pencil"></a>
                                                      </button>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                                <tbody>
                                                        <tr>

                                                          <td class="hidden-xs"><b>CEP</b></td>
                                                          <td > <input type="text"
                                                          class="form-control" name="hemocentro_cep"
                                                          placeholder="CEP"
                                                          value="<?php echo $dadosHemocentro->cep ?>" required></td>
                                                          <td align="center">
                                                            <button type="submit" class="btn btn-danger" >
                                                              <a  class="fa fa-pencil"></a>
                                                            </button>
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

<form action="<?=site_url('Painel_hemocentro/AtualizarSenha') ?>" method="post">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>

                  <th class="hidden-xs">Alterar dados</th>

              </tr>
            </thead>
            <tbody>
                    <tr>

                      <td class="hidden-xs"><b>Email</b></td>
                      <td><input
                      type="email" class="form-control" name=""
                      placeholder="Email" value="<?php echo $dadosHemocentro->email ?>" disabled  />
                    </div>
                    <input type="hidden" name="hemocentro_email" value="<?php echo $dadosHemocentro->email ?>">
                  </div></td>
                      <td align="center">
                        <button type="submit" class="btn btn-danger"disabled  >
                          <a  class="fa fa-pencil"></a>
                        </button>

                      </td>
                    </tr>
                  </tbody>


                        <tbody>
                                <tr>

                                  <td class="hidden-xs"><b>Senha</b></td>
                                  <td ><input type="password" class="form-control"
                                  name="hemocentro_senha" placeholder="Nova senha"
                                  value="" required/></td>
                                  <td align="center">
                                    <button type="submit" class="btn btn-danger" >
                                      <a  class="fa fa-pencil" ></a>
                                    </button>
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

		                </div>
		            </div>
		        </div>
