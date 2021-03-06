


    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/index')?>"><i class="fa fa-home " aria-hidden="true"></i> Home</a></li>
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a></li>
            <!--  <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/agenda')?>"><i class="fa fa-clock-o " aria-hidden="true"></i> Horario de coletas</a></li>-->
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/agenda')?>"><i class="fa fa-calendar " aria-hidden="true"></i> Agenda</a></li>
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/carregarCadastroEstoque')?>"><i class="fa fa-plus " aria-hidden="true"></i> Novo Estoque</a></li>
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/carregaMeuEstoque')?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Meu Estoque</a></li>
              <li class="active"><a class="fonte2" href="<?=site_url('Painel_hemocentro/localizarDoadores')?>"><i class="fa fa-plus" aria-hidden="true"></i> Procurar Doadores</a></li>
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/editaPerfilHemocentro')?>"><i class="fa fa-cog" aria-hidden="true"></i> Configurações</a></li>
          </ul>


        </div>
        <br>
        <div  class="col-sm-9 col-sm-offset-2 row">
          <?php if ($this->input->get('alerta') == 2) { ?>
            <div class="alert alert-success">
              Mensagem enviada com sucesso!!!
            </div>
            <?php } ?>
                  </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">



          <div class="panel panel-default panel-table">
             <div class="panel-heading ">
               <div class="row ">
                 <div class="col col-xs-6">
                   <h3 class="panel-title">Procure um doador próximo de você</h3>
                 </div>
                  <form action="<?=site_url('Painel_hemocentro/localizar')?>" method="post">
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

                   <div class="row">



                     <div class="col-sm-12">
                       <div class="form-group col-sm-9">
                         <label for="">Por favor digite o <b>Estado</b> ou <b>Tipo Sanguíneo</b></label>
                         <br>	<input
                         type="text" class="form-control" name="busca"
                         placeholder="Procurar Doador" value=""   />
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
                         <th>Tipo Sanguíneo</th>
                         <th>Nome</th>
                         <th>Email</th>
                         <th>Telefone</th>
                         <th>Estado</th>
                         <th>Cidade</th>
                         <th>Endereço</th>
                         <th>Opções</th>
                       </tr>
                     </thead>
                     <tbody>
                       <?php if (!empty($dadosDoador)):

                         foreach ($dadosDoador as $row): ?>

                         <input type="hidden" name="id_hemocentro" value="<?php echo $row->id_doador; ?>">
                         <tr>
                           <td><?php echo $row->tipo_sanguineo; ?></td>
                           <td><?php echo $row->nome; ?></td>
                           <td><?php echo $row->email; ?></td>
                           <td><?php echo $row->telefone; ?></td>
                            <td><?php echo $row->estado; ?></td>
                           <td><?php echo $row->cidade; ?></td>
                          <td><?php echo $row->endereco; ?></td>
                          <td>
                            <a  href="<?= site_url('mensagem/carregarEnvioMensagem/' .  $row->id_doador) ?>"  class="btn btn-primary btn-sm">
                                <i class="fa fa-envelope" aria-hidden="true"></i> Mensagem
                            </a>
                          </td>

                         </tr>

                       <?php endforeach;?>
                       <?php else: {
                         echo "<td colspan='8' align = 'center'>
                       Procure por um doador
                                   </td>";
                       } ?>
                       <?php    endif; ?>
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
