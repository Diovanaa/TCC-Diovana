
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/index')?>"><i class="fa fa-home " aria-hidden="true"></i>Home</a></li>
            <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a></li>
            <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/agenda')?>"><i class="fa fa-clock-o " aria-hidden="true"></i> Horario de coletas</a></li>
            <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/agenda')?>"><i class="fa fa-calendar " aria-hidden="true"></i> Agenda</a></li>
            <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/carregarCadastroEstoque')?>"><i class="fa fa-plus " aria-hidden="true"></i> Novo Estoque</a></li>
            <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/carregaMeuEstoque')?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Meu Estoque</a></li>
            <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/localizarDoadores')?>"><i class="fa fa-plus" aria-hidden="true"></i> Procurar Doadores</a></li>
            <li class="active"><a class="fonte2" href="<?=site_url('Painel_hemocentro/editaPerfilHemocentro')?>"><i class="fa fa-cog" aria-hidden="true"></i> Configurações</a></li>


          </ul>


        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><?php echo $dadosHemocentro->nome; ?></h1>

          <div class="panel panel-default panel-table">
            <div class="panel-heading ">
              <div class="row ">
                <div class="col col-xs-6">
                  <h1 class="panel-title">Editar informações</h1>
                </div>
                <div class="col col-xs-6 text-right">
                  <form action="<?=site_url('Painel_hemocentro/Atualizar') ?>" method="post">
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

                        <td class="hidden-xs"><b>Nome</b></td>
                        <td>
                          <input type="text" class="form-control" name="hemocentro_nome" placeholder="Nome" value="<?php echo $dadosHemocentro->nome ?>"/>
                        </td>
                        <td align="center">



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

                          </td>
                        </tr>
                      </tbody>

                            <tbody>
                              <tr>

                                <td class="hidden-xs"><b>Estado</b></td>


                                  <td >  <select class="form-control" name="hemocentro_estado" id="estadoHemocentro">
                                          <!-- <option value="<?php echo $dadosDoador->estado; ?>"><?php echo $dadosDoador->estado; ?></option> -->
                                          <option value="Acre">Acre</option>
                                          <option value="Alagoas">Alagoas</option>
                                          <option value="Amazonas">Amazonas</option>
                                          <option value="Amapá">Amapá</option>
                                          <option value="Bahia">Bahia</option>
                                          <option value="Ceará">Ceará</option>
                                          <option value="Distrito Federal">Distrito Federal</option>
                                          <option value="Espírito Santo">Espírito Santo</option>
                                          <option value="Goiás">Goiás</option>
                                          <option value="Maranhão">Maranhão</option>
                                          <option value="Mato Grosso">Mato Grosso</option>
                                          <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                          <option value="Minas Gerais">Minas Gerais</option>
                                          <option value="Pará">Pará</option>
                                          <option value="Paraíba">Paraíba</option>
                                          <option value="Paraná">Paraná</option>
                                          <option value="Pernambuco">Pernambuco</option>
                                          <option value="Piauí">Piauí</option>
                                          <option value="Rio de Janeiro">Rio de Janeiro</option>
                                          <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                          <option value="Rondônia">Rondônia</option>
                                          <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                          <option value="Roraima">Roraima</option>
                                          <option value="Santa Catarina">Santa Catarina</option>
                                          <option value="Sergipe">Sergipe</option>
                                          <option value="São Paulo">São Paulo</option>
                                          <option value="Tocantins">Tocantins</option>
                                      </select>
                                  </td>
                                  <td align="center">

                                  </td>

                                </tr>
                              </tbody>
                              <tbody>
                                <tr>

                                  <td class="hidden-xs"><b>Cidade</b></td>
                                  <td > <input type="text"
                                    class="form-control" name="hemocentro_cidade"
                                    placeholder="Cidade"
                                    value="<?php echo $dadosHemocentro->cidade ?>" required></td>
                                    <td align="center">

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
                                <h1 class="panel-title">Alterar dados</h1>
                              </div>
                              <div class="col col-xs-6 text-right">
                                  <form action="<?=site_url('Painel_hemocentro/AtualizarSenha') ?>" method="post">
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

                                      <td class="hidden-xs"><b>Email</b></td>
                                      <td>
                                        <input
                                        type="email" class="form-control" name=""
                                        placeholder="Email" value="<?php echo $dadosHemocentro->email ?>" disabled />

                                      <input type="hidden" name="hemocentro_email" value="<?php echo $dadosHemocentro->email ?>">
                                    </div></td>
                                    <td align="center">


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

      $('#estadoHemocentro').val('<?php echo $dadosHemocentro->estado; ?>');
    </script>
    </body>
    </html>
