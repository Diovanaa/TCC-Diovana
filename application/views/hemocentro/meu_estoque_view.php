
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/index')?>"><i class="fa fa-home " aria-hidden="true"></i> Home</a></li>
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a></li>
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/carregarCadastroEstoque')?>"><i class="fa fa-plus " aria-hidden="true"></i> Novo Estoque</a></li>
              <li class="active"><a class="fonte2" href="<?=site_url('Painel_hemocentro/carregaMeuEstoque')?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Meu Estoque</a></li>
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/localizarDoadores')?>"><i class="fa fa-plus" aria-hidden="true"></i> Procurar Doadores</a></li>
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/editaPerfilHemocentro')?>"><i class="fa fa-cog" aria-hidden="true"></i> Configurações</a></li>
          </ul>


        </div>
        <br>
        <div  class="col-sm-9 col-sm-offset-2 row">
                              <?php if ($this->input->get('alerta') == 1) { ?>
                              <div class="alert alert-success">
                                Você excluiu o estoque com sucesso!!!
                              </div>
                              <?php } ?>
                              <?php if ($this->input->get('alerta') == 2) { ?>
                              <div class="alert alert-success">
                                Você adicionou um novo estoque com sucesso!!!
                              </div>
                              <?php } ?>
                  </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><?php echo $dadosHemocentro->nome ?></h1>


          <div class="panel panel-default panel-table">
             <div class="panel-heading ">
               <div class="row ">
                 <div class="col col-xs-6">
                   <h3 class="panel-title">Meu estoque sanguíneo</h3>
                 </div>
                 <div class="col col-xs-6 text-right">


                     <a href="<?=site_url('Painel_hemocentro/carregaMeuEstoque')?>">
                         </a>

                           <a href="<?=
                           site_url('Painel_hemocentro/carregarCadastroEstoque')?>" class="btn btn-primary">Novo Estoque</a>

                 </div>
               </div>
             </div>
             <div class="panel-body">
               <div class="table-responsive">


               <table class="table">
               <thead>
                   <tr>
                       <th>Tipo A-</th>
                       <th>Tipo A+</th>
                       <th>Tipo B-</th>
                       <th>Tipo B+</th>
                       <th>Tipo AB-</th>
                       <th>Tipo AB+</th>
                       <th>Tipo O-</th>
                       <th>Tipo O+</th>
                   </tr>
               </thead>
               <tbody id="myTable">
               <?php if (!empty($dadosEstoque)):
                  foreach ($dadosEstoque as $row): ?>
                           <td> <?php echo $row->tipo_a0;?> </td>
                           <td> <?php echo $row->tipo_a1;?> </td>
                           <td><?php echo $row->tipo_b0; ?></td>
                           <td><?php echo $row->tipo_b1; ?></td>
                           <td> <?php echo $row->tipo_ab0;?> </td>
                           <td> <?php echo $row->tipo_ab1;?> </td>
                           <td><?php echo $row->tipo_o0; ?></td>
                           <td><?php echo $row->tipo_o1; ?></td>
                           <td>

                             <a href="<?=site_url('Painel_hemocentro/editarEstoque/' . $row->id_estoque )?>"
                               class="btn btn-primary"><em class="fa fa-pencil"></em></a>
                               
                             <a  href="<?= site_url('Painel_hemocentro/excluir/' . $row->id_estoque) ?>"
                               class="btn btn-danger"
                               onclick="return confirm('Têm certeza que deseja excluir esta informação?')">
                                 <i class="fa fa-trash-o " aria-hidden="true"></i>
                             </a>

                           </td>


                     </tr>
                           <?php endforeach; ?>
                         <?php else: {
                           echo "<td colspan='5' align = 'center'>
                         Você não tem nenhum estoque.
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
  </body>
</html>
