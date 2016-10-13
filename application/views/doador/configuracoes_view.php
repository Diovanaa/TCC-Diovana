

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
          <li class=""><a href="<?=site_url('painel_doador/index')?>"><i class="fa fa-home " aria-hidden="true"></i>Home</a></li>
          <li class=""><a href="<?=site_url('painel_doador/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i>Perfil</a></li>
          <li ><a href="<?=site_url('painel_doador/carregarCadastroDoacao')?>"><i class="fa fa-plus " aria-hidden="true"></i>Nova Doação</a></li>
          <li><a href="<?=site_url('painel_doador/carregaMinhasDoacoes')?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Minhas Doações</a></li>
          <li class="active"><a href="<?=site_url('painel_doador/editaPerfilDoador')?>"><i class="fa fa-cog" aria-hidden="true"></i>Configurações</a></li>

        </ul>


      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">Dashboard</h1>

        <div class="panel panel-default panel-table">
          <div class="panel-heading ">
            <div class="row ">
              <div class="col col-xs-6">
                <h1 class="panel-title">Meus dados</h1>
              </div>
              <div class="col col-xs-6 text-right">


                <a href="<?=site_url('painel_doador/carregaMinhasDoacoes')?>">
                </a>

                <a href="<?=
                site_url('painel_doador/editaPerfilDoador')?>" class="btn btn-danger">Editar</a>

              </div>
            </div>
          </div>
          <div class="panel-body">
            <form action="<?=site_url('Painel_doador/AtualizarDadosPessoais') ?>" method="post">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>

                      <th class="hidden-xs">Alterar dados pessoais</th>

                    </tr>
                  </thead>


                  <tbody>
                    <tr>

                      <td class="hidden-xs"><b>Nome</b></td>
                      <td><input type="text" class="form-control" name="doador_nome" placeholder="Nome" value="<?php echo $dadosDoador->nome ?>" />
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
                        class="form-control" name="doador_telefone"
                        placeholder="Telefone"
                        value="<?php echo $dadosDoador->telefone ?>" required></td>
                        <td align="center">
                          <button type="submit" class="btn btn-danger" >
                            <a  class="fa fa-pencil"></a>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>

                        <td class="hidden-xs"><b>Sexo</b></td>
                        <td><input type="text"
                          class="form-control" name="doador_sexo"
                          placeholder="Sexo"
                          value="<?php echo $dadosDoador->sexo ?>" required></td>
                          <td align="center">
                            <button type="submit" class="btn btn-danger" >
                              <a  class="fa fa-pencil"></a>
                            </button>
                          </td>
                        </tr>
                      </tbody>

                      <tbody>
                        <tr>

                          <td class="hidden-xs"><b>Data de Nascimento</b></td>
                          <td><input type="text" class="form-control"
                            name="doador_datanascimento" placeholder="Data de nascimento"
                            value="<?php echo $dadosDoador->data_nascimento ?>" required></td>
                            <td align="center">
                              <button type="submit" class="btn btn-danger" >
                                <a  class="fa fa-pencil"></a>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>

                            <td class="hidden-xs"><b>Tipo Sanguíneo</b></td>
                            <td > <input type="text"
                              class="form-control" name="doador_tiposanguineo"
                              placeholder="Tipo sanguíneo"
                              value="<?php echo $dadosDoador->tipo_sanguineo ?>" required></td>
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

                  </div>

                </div>



                <div class="panel panel-default panel-table">
                  <div class="panel-heading ">
                    <div class="row ">
                      <div class="col col-xs-6">
                        <h1 class="panel-title">Minhas Doações</h1>
                      </div>

                    </div>
                  </div>
                  <div class="panel-body">

                    <form action="<?=site_url('Painel_doador/AtualizarEndereco') ?>" method="post">


                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>

                              <th class="hidden-xs">Alterar Endereço</th>

                            </tr>
                          </thead>
                          <tbody>
                            <tr>

                              <td class="hidden-xs"><b>Estado</b></td>
                              <td > <input type="text"
                                class="form-control" name="doador_estado"
                                placeholder="Estado"
                                value="<?php echo $dadosDoador->estado ?>" required></td>
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
                                <td > <input type="text"
                                  class="form-control" name="doador_cidade"
                                  placeholder="Cidade"
                                  value="<?php echo $dadosDoador->cidade ?>" required></td>
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
                                    class="form-control" name="doador_endereco"
                                    placeholder="Endereço"
                                    value="<?php echo $dadosDoador->endereco ?>" required></td>
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

                        </div>

                      </div>


                      <div class="panel panel-default panel-table">
                        <div class="panel-heading ">
                          <div class="row ">
                            <div class="col col-xs-6">
                              <h1 class="panel-title"></h1>
                            </div>

                          </div>
                        </div>
                        <div class="panel-body">

                          <form action="<?=site_url('Painel_doador/AtualizarSenha') ?>" method="post">
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
                                      placeholder="Email" value="<?php echo $dadosDoador->email ?>" disabled  />
                                    </div>
                                    <input type="hidden" name="doador_email" value="<?php echo $dadosDoador->email ?>">
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
                                    name="doador_senha" placeholder="Nova senha"
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
