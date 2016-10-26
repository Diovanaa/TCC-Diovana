
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a class="fonte2" href="<?=site_url('painel_doador/index')?>"><i class="fa fa-home " aria-hidden="true"></i> Home</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/carregarCadastroDoacao')?>"><i class="fa fa-plus " aria-hidden="true"></i> Nova Doação</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/carregaMinhasDoacoes')?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Minhas Doações</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/editaPerfilDoador')?>"><i class="fa fa-cog" aria-hidden="true"></i> Configurações</a></li>
            <li class="active"><a class="fonte2" href="<?=site_url('painel_doador/localizarHemocentros')?>"><i class="fa fa-map-marker" aria-hidden="true"></i> Hemocentros</a></li>


          </ul>


        </div>
        <br>
        <div  class="col-sm-9 col-sm-offset-2 row">
          <?php if ($this->input->get('aviso') == 5) { ?>
            <div class="alert alert-danger">
              Você já se candidatou a essa vaga anteriormente!!!
            </div>
            <?php } ?>
                  </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><?php echo $dadosDoador->nome ?></h1>


          <div class="panel panel-default panel-table">
             <div class="panel-heading ">
               <div class="row ">
                 <div class="col col-xs-6">
                   <h3 class="panel-title">Procurar Hemocentros</h3>
                 </div>
                 <div class="col col-xs-6 text-right">

                   <button type="submit" class="btn btn-primary">
                     <i class="fa fa-search"></i>		Procurar
                   </button>
                  


                 </div>
               </div>
             </div>
             <div class="panel-body">
               <div class="table-responsive">


               <table class="table">
                 <div class="panel-body">
                 <form action="<?=site_url('Painel_doador/localizar')?>" method="post">
                   <div class="row">



                     <div class="col-sm-12">
                       <div class="form-group col-sm-9">
                         <label for="">Por favor digite o estado</label>
                         <br>	<input
                         type="text" class="form-control" name="busca"
                         placeholder="Procurar Hemocentro" value=""   />
                       </div>
                       <div class="col-sm-5">

                       </div>

                     </div>

                   </div>




                 </form>
                 <div class="panel-body">
                   <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                     <thead>
                       <tr>
                         <th>Nome</th>
                         <th>Email</th>
                         <th>Telefone</th>
                         <th>Estado</th>
                         <th>Cidade</th>
                         <th>Bairro</th>
                         <th>Endereço</th>
                         <th>CEP</th>
                       </tr>
                     </thead>
                     <tbody>
                       <?php if (!empty($dadosHemocentro)):

                         foreach ($dadosHemocentro as $row): ?>

                         <input type="hidden" name="id_hemocentro" value="<?php echo $row->id_hemocentro; ?>">
                         <tr>
                           <td><?php echo $row->nome; ?></td>
                           <td><?php echo $row->email; ?></td>
                           <td><?php echo $row->telefone; ?></td>
                            <td><?php echo $row->estado; ?></td>
                           <td><?php echo $row->cidade; ?></td>
                           <td><?php echo $row->bairro; ?></td>
                          <td><?php echo $row->endereco; ?></td>
                          <td><?php echo $row->cep; ?></td>


                         </tr>

                       <?php endforeach;
                       elseif ($this->input->get('aviso') == 2): {
                         echo "<td colspan='5' align = 'center'>
                         <div class='alert alert-danger'>
                         A sua busca não retornou nenhum resultado...
                         </div>
                         </td>";
                       }
                     endif; ?>
                   </tbody>

                   </table>


               </div>


        </div>
             </div>
               </div>

               </table>
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
