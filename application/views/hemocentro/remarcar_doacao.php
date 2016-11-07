


    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li  class="active"><a class="fonte2" href="<?=site_url('Painel_hemocentro/index')?>"><i class="fa fa-home " aria-hidden="true"></i> Home</a></li>
            <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a></li>
            <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/agenda')?>"><i class="fa fa-clock-o " aria-hidden="true"></i> Horario de coletas</a></li>
              <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/agenda')?>"><i class="fa fa-calendar " aria-hidden="true"></i> Agenda</a></li>
            <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/carregarCadastroEstoque')?>"><i class="fa fa-plus " aria-hidden="true"></i> Novo Estoque</a></li>
            <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/carregaMeuEstoque')?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Meu Estoque</a></li>
            <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/localizarDoadores')?>"><i class="fa fa-plus" aria-hidden="true"></i> Procurar Doadores</a></li>
            <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/editaPerfilHemocentro')?>"><i class="fa fa-cog" aria-hidden="true"></i> Configurações</a></li>
          </ul>


        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><?php echo $dadosHemocentro->nome; ?></h1>

          <div class="panel panel-default panel-table">
               <div class="panel-heading ">
                 <div class="row ">
                   <div class="col col-xs-6">
                     <h1 class="panel-title">Alterar Doação</h1>
                   </div>

                 </div>
               </div>
               <div class="panel-body">
                 <form action="<?=site_url('Painel_hemocentro/remarcarDoacao')?>" method="post">

                   <div class="form-group col-lg-6">
                       <label for="turnoDoacaoMarcada">Turno da doação*:</label>
                            <select class="form-control" name="turno_doacao_marcada" id="">
                                 <option>Manhã</option>
                                 <option>Tarde</option>
                                 <option>Noite</option>
                           </select>
                  </div>

                   <div class="form-group col-lg-6">
                         <label for="dataDoacaoMarcada">Data da doação*:</label>
                         <input type="date" id="" name="data_doacao_marcada" placeholder="Data da doação marcada"
                         value="" class="form-control" required  />
                   </div>

<input type="hidden" name="id_doacao_marcada" value="<?php echo $dadosDoacaoMarcada->id_doacao_marcada; ?>">

                    <h5>*Campos obrigatórios</h5>

                    <div class="col-lg-3">
                          <button type="submit" class="btn btn-primary">
                                 Salvar
                          </button>

                    </div>

                    <br>
                    <br>
                  </form><!-- Fecha formulário-->

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
