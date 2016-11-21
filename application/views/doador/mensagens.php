

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a class="fonte2" href="<?=site_url('painel_doador/index')?>"><i class="fa fa-home " aria-hidden="true"></i> Home</a></li>
            <li ><a class="fonte2" href="<?=site_url('painel_doador/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a></li>
              <li><a class="fonte2" href="<?=site_url('painel_doador/localizarHemocentros')?>"><i class="fa fa-map-marker" aria-hidden="true"></i> Hemocentros</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/carregarCadastroDoacao')?>"><i class="fa fa-plus " aria-hidden="true"></i> Nova Doação</a></li>
            <li class="active"><a class="fonte2" href="<?=site_url('painel_doador/mensagens')?>"><i class="fa fa-envelope " aria-hidden="true"></i> Mensagens</a></li>

            <li><a class="fonte2" href="<?=site_url('painel_doador/editaPerfilDoador')?>"><i class="fa fa-cog" aria-hidden="true"></i> Configurações</a></li>
  </ul>


        </div>
        <br>
        <div  class="col-sm-9 col-sm-offset-2 col-md-10 col-md-offset-2 row">
                              <?php if ($this->input->get('alerta') == 1) { ?>
                              <div class="alert alert-success">
                                Você excluiu a Mensagem com sucesso!!!
                              </div>
                              <?php } ?>
                  </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><?php echo $dadosDoador->nome; ?></h1>



             <div class="panel panel-default panel-table">
                          <div class="panel-heading ">
                            <div class="row ">
                              <div class="col col-xs-6">
                                <h1 class="panel-title">Mensagens</h1>
                              </div>
                              <div class="col col-xs-6 text-right">




                              </div>
                            </div>
                          </div>
                          <div class="panel-body">
                              <div class="table-responsive">


                            <table class="table">
                            <thead>
                                <tr>
                                  <th>
                                    Hemocentro
                                  </th>
                                  <th>Mensagem </th>
                                  <th>
                                    Opções
                                  </th>
                             </tr>
                            </thead>
                            <tbody id="myTable">
                            <?php if (!empty($dadosMensagem)):
                               foreach ($dadosMensagem as $row): ?>
                               <td>
                                 <?php echo $row->nome;?>
                               </td>
                                        <td>
                                          <?php echo $row->mensagem;?>
                                        </td>

<td>
                                          <a  href="<?= site_url('mensagem/excluir/' . $row->id_mensagem . '/' . $row->id_doador ) ?>"
                                            class="btn btn-danger"
                                            onclick="return confirm('Têm certeza que deseja excluir esta informação?')">
                                              <i class="fa fa-trash-o " aria-hidden="true"></i>
                                          </a>

                                        </td>


                                  </tr>
                                        <?php endforeach; ?>
                                      <?php else: {
                                        echo "<td colspan='5' align = 'center'>
                                      Você não tem nenhuma Mensagem!
                                                  </td>";
                                      } ?>
                                      <?php	endif; ?>
                            </tbody>

                            </table>
</div>
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
