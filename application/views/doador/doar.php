
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a class="fonte2" href="<?=site_url('painel_doador/index')?>"><i class="fa fa-home " aria-hidden="true"></i> Home</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/carregarCadastroDoacao')?>"><i class="fa fa-plus " aria-hidden="true"></i> Nova Doação</a></li>
          <!--  <li><a class="fonte2" href="<?=site_url('painel_doador/carregaMinhasDoacoes')?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Minhas Doações</a></li>-->
            <li><a class="fonte2" href="<?=site_url('painel_doador/editaPerfilDoador')?>"><i class="fa fa-cog" aria-hidden="true"></i> Configurações</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/localizarHemocentros')?>"><i class="fa fa-map-marker" aria-hidden="true"></i> Hemocentros</a></li>
            <li class="active"><a class="fonte2" href="<?=site_url('painel_doador/doarAqui')?>"><i class="fa fa-map-marker" aria-hidden="true"></i> Doar em um hemocentros</a></li>
          </ul>
        </div>
        <br>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><?php echo $dadosDoador->nome; ?></h1>

          <div class="panel panel-default panel-table">
               <div class="panel-heading ">
                 <div class="row ">
                   <div class="col col-xs-6">

                        <h1 class="panel-title">Quero doar no <?php echo $dadosHemocentro->nome; ?></h1>

                   </div>

                 </div>
               </div>
               <div class="panel-body">
                 <form action="<?=site_url('Painel_doador/salvarDoacaoMarcada')?>" method="post">
                   <input type="hidden" name="id_hemocentro" value="<?php echo $dadosHemocentro->id_hemocentro ?>">

                        <!-- Seleção do tipo sanguineo do doador-->
                        <div class="form-group col-lg-6">
                            <label for="tipoDoacaoMarcada">Tipo de doação*:</label>
                                 <select class="form-control" name="tipo_doacao_marcada" id="">
                                      <option>Sangue total</option>
                                      <option>Plaquetas por aferise</option>
                                      <option>Autodoação</option>
                                      <option>Doação de medula óssea</option>
                                </select>
                       </div>
                       <div class="form-group col-lg-6">
                             <label for="dataDoacaoMarcada">Data da doação*:</label>
                             <input type="date" id="" name="data_doacao_marcada" placeholder="Data da doação marcada"
                             value="" class="form-control" required  />
                       </div>
                       <div class="form-group col-lg-6">
                           <label for="turnoDoacaoMarcada">Turno da doação*:</label>
                                <select class="form-control" name="turno_doacao_marcada" id="">
                                     <option>Manhã</option>
                                     <option>Tarde</option>
                                     <option>Noite</option>
                               </select>
                      </div>


                    <h5>*Campos obrigatórios</h5>
                    <!-- Botão para cadastrar-->
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



            </div><!--  fecha row-->
        </div><!--  fecha container-->

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
