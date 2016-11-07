    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a class="fonte2" href="<?=site_url('painel_doador/index')?>"><i class="fa fa-home " aria-hidden="true"></i> Home</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/localizarHemocentros')?>"><i class="fa fa-map-marker" aria-hidden="true"></i> Hemocentros</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/carregarCadastroDoacao')?>"><i class="fa fa-plus " aria-hidden="true"></i> Nova Doação</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/carregaMinhasDoacoes')?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Minhas Doações</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/editaPerfilDoador')?>"><i class="fa fa-cog" aria-hidden="true"></i> Configurações</a></li>

          <!--  <li><a class="fonte2" href="<?=site_url('painel_doador/doarAqui')?>"><i class="fa fa-map-marker" aria-hidden="true"></i> Doar em um hemocentros</a></li>-->
          </ul>
        </div>
        <br>
        <div  class="col-sm-9 col-sm-offset-2 row">
                              <?php if ($this->input->get('alerta') == 1) { ?>
                              <div class="alert alert-success">
                                Você excluiu a doação com sucesso!!!
                              </div>
                              <?php } ?>
                              <?php if ($this->input->get('alerta') == 2) { ?>
                              <div class="alert alert-success">
                                Você adicionou uma nova doação com sucesso!!!
                              </div>
                              <?php } ?>
                  </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><?php echo $dadosDoador->nome ?> ... <?php echo $dadosDoador->tipo_sanguineo ?></h1>

          <div class="panel panel-default panel-table">
             <div class="panel-heading ">
               <div class="row ">
                 <div class="col col-xs-6">
                   <h3 class="panel-title">Minhas doações marcadas</h3>
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
                       <th>Hemocentro </th>
                       <th>Tipo da doação</th>
                       <th>Data da doação</th>
                       <th>Turno da doação</th>
                       <th>Status da doação</th>
                       <th>Opções</th>
                   </tr>
               </thead>
               <tbody id="myTable">
               <?php if (!empty($dadosDoacaoMarcada)):
                  foreach ($dadosDoacaoMarcada as $row): ?>
                           <td>
                             <?php echo $row->nome;?>
                           </td>
                           <td>
                             <?php echo $row->tipo_doacao_marcada;?>
                           </td>
                           <td>
                             <input type="date"
                                        class="form-control" name="doador_data_nascimento"
                                        placeholder="Data de Nascimento"
                                        value="<?php echo $row->data_doacao_marcada;?>" disabled>

                           </td>
                           <td><?php echo $row->turno_doacao_marcada; ?></td>

                           <td>
                           <?php echo $row->status_doacao_marcada; ?></td>

                             <td>

                            <a href="#"
                               class="btn btn-primary"><em class="fa fa-pencil"></em></a>

                             <a  href="<?= site_url('painel_doador/excluirDoacaMarcada/' . $row->id_doacao_marcada) ?>"
                               class="btn btn-danger"
                               onclick="return confirm('Têm certeza que deseja excluir esta informação?')">
                                 <i class="fa fa-trash-o " aria-hidden="true"></i>
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
             <div class="panel-footer ">
               <div class="row">

               </div>
             </div>
           </div>



          <div class="panel panel-default panel-table">
             <div class="panel-heading ">
               <div class="row ">
                 <div class="col col-xs-6">
                   <h3 class="panel-title">Minhas Doações</h3>
                 </div>
                 <div class="col col-xs-6 text-right">


                     <a href="<?=site_url('painel_doador/carregaMinhasDoacoes')?>">
                         </a>

                           <a href="<?=
                           site_url('painel_doador/carregarCadastroDoacao')?>" class="btn btn-primary">Nova Doação</a>

                 </div>
               </div>
             </div>
             <div class="panel-body">
               <div class="table-responsive">


               <table class="table">
               <thead>
                   <tr>
                       <th>Nome hemocentro</th>
                       <th>
                         Tipo doação
                       </th>
                       <th>Data da doação</th>
                      <th>Opções</th>
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
                           <td>
                             <input type="date"
                                        class="form-control" name=""
                                        placeholder="Data da doacao"
                                        value="<?php echo $row->data_doacao; ?>" disabled>
                             </td>

                           <td>

                             <a href="<?=site_url('painel_doador/editarDoacoes/' . $row->id_doacao )?>"
                               class="btn btn-primary"><em class="fa fa-pencil"></em></a>

                             <a  href="<?= site_url('painel_doador/excluir/' . $row->id_doacao) ?>"
                               class="btn btn-danger"
                               onclick="return confirm('Têm certeza que deseja excluir esta informação?')">
                                 <i class="fa fa-trash-o " aria-hidden="true"></i>
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
             <div class="panel-footer ">
               <div class="row">

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
    <script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
    <script>
        webshims.setOptions('forms-ext', {types: 'date'});
    webshims.polyfill('forms forms-ext');
    </script>
  </body>
</html>
