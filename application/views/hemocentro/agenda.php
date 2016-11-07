
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
              <li ><a class="fonte2" href="<?=site_url('Painel_hemocentro/index')?>"><i class="fa fa-home " aria-hidden="true"></i> Home</a></li>
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a></li>
              <li class="active"><a class="fonte2" href="<?=site_url('Painel_hemocentro/agenda')?>"><i class="fa fa-calendar " aria-hidden="true"></i> Agenda</a></li>
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/carregarCadastroEstoque')?>"><i class="fa fa-plus " aria-hidden="true"></i> Novo Estoque</a></li>
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/carregaMeuEstoque')?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Meu Estoque</a></li>
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/localizarDoadores')?>"><i class="fa fa-plus" aria-hidden="true"></i> Procurar Doadores</a></li>
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/editaPerfilHemocentro')?>"><i class="fa fa-cog" aria-hidden="true"></i> Configurações</a></li>
          </ul>


        </div>
        <div class="col-lg-12">
          <h1 class="meio">Agenda da semana</h1>
        </div>
        <div class="col-sm-9 col-sm-offset-2">
          <?php if ($this->input->get('alerta') == 2) { ?>
                <div class="alert alert-success">
                Doação Cadastrada com sucesso!!!
                </div>
                <?php } ?>
                <?php if ($this->input->get('alerta') == 1) { ?>
                      <div class="alert alert-success">
                      Doação Aceita com sucesso!!!
                      </div>
                      <?php } ?>
                      <?php if ($this->input->get('alerta') == 3) { ?>
                            <div class="alert alert-success">
                            Doação Remarcada com sucesso!!!
                            </div>
                            <?php } ?>
        </div>

<div class="col-lg-2"></div>

        <div class="col-lg-9 col-md-9 col-md-offset-2 col-sm-9 col-sm-offset-3">
                      <div class="panel panel-default panel-table">
                         <div class="panel-heading ">
                           <div class="row ">
                             <div class="col col-xs-6">

</h3>
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
                                   <th>Nome Doador</th>
                                   <th>Telefone</th>
                                   <th>Tipo da doação</th>
                                   <th>Data da doação</th>
                                   <th>Turno da doação</th>
                                  <th>Status</th>

                               </tr>
                           </thead>
                           <tbody id="myTable">
                           <?php if (!empty( $dadosDoacaoMarcada)):
                              foreach ( $dadosDoacaoMarcada as $row): ?>

                                        <td><?php echo $row->nome; ?></td>
                                      <td><?php echo $row->telefone; ?></td>
                                      <td>
                                        <?php echo $row->tipo_doacao_marcada; ?>
                                      </td>
                                      <td>
                                        <?php echo $row->data_doacao_marcada; ?>
                                      </td>
                                      <td>
                                        <?php echo $row->turno_doacao_marcada; ?>
                                      </td>
                                      <td>
                                        <?php echo $row->status_doacao_marcada; ?>
                                      </td>
                                 </tr>

 <?php endforeach; ?>
                                     <?php else: {
                                       echo "<td colspan='5' align = 'center'>
                                     Não possuem Doadores aguardando confirmação
                                                 </td>";
                                     } ?>
                                     <?php	endif; ?>
                           </tbody>

                           </table>
             </div>
                         </div>
                         <div class="panel-footer ">
                           <div class="row">

                           </div>
                         </div>
                       </div>

  </div>


</div>

           </br>


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
