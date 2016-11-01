
    <div class="container-fluid">
      <div class="row ">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a class="fonte2" href="<?=site_url('painel_doador/index')?>"><i class="fa fa-home " aria-hidden="true"></i> Home</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/carregarCadastroDoacao')?>"><i class="fa fa-plus " aria-hidden="true"></i> Nova Doação</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/carregaMinhasDoacoes')?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Minhas Doações</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/editaPerfilDoador')?>"><i class="fa fa-cog" aria-hidden="true"></i> Configurações</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/localizarHemocentros')?>"><i class="fa fa-map-marker" aria-hidden="true"></i> Hemocentros</a></li>
            <li class="active"><a class="fonte2" href="<?=site_url('Painel_hemocentro/hemocentros')?>"><i class="fa fa-map-marker" aria-hidden="true"></i> Doar em um hemocentros</a></li>
          </ul>
        </div>
        <br>
        <div class="col-lg-12">
          <h1 class="meio">Lista de Hemocentros do Brasil</h1>
        </div>

<div class="col-lg-2"></div>
        <div class="col-lg-9">
                      <div class="panel panel-default panel-table">
                         <div class="panel-heading ">
                           <div class="row ">
                             <div class="col col-xs-6">
                               <h3 class="panel-title"></h3>
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
                                   <th>Nome</th>
                                   <th>Endereco</th>
                                   <th>Cidade</th>
                                   <th>CEP</th>
                                   <th>Estado</th>
                                   <th>Telefone</th>

                               </tr>
                           </thead>
                           <tbody id="myTable">
                           <?php if (!empty($dadosHemocentro)):
                              foreach ($dadosHemocentro as $row): ?>
                                       <td> <?php echo $row->nome;?> </td>
                                       <td> <?php echo $row->endereco;?> </td>
                                       <td><?php echo $row->cidade; ?></td>
                                       <td><?php echo $row->cep; ?></td>
                                       <td> <?php echo $row->estado;?> </td>
                                       <td> <?php echo $row->telefone;?> </td>
                                       <td>

                                         <!--<a href="<?=site_url('Painel_hemocentro/editarEstoque/' . $row->id_estoque )?>"
                                           class="btn btn-primary"><em class="fa fa-pencil"></em></a>

                                         <a  href="<?= site_url('Painel_hemocentro/excluir/' . $row->id_estoque) ?>"
                                           class="btn btn-danger"
                                           onclick="return confirm('Têm certeza que deseja excluir esta informação?')">
                                             <i class="fa fa-trash-o " aria-hidden="true"></i>
                                         </a>-->

                                       </td>


                                 </tr>
                                       <?php endforeach; ?>
                                     <?php else: {
                                       echo "<td colspan='5' align = 'center'>
                                     Não possuem Hemocentros
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
