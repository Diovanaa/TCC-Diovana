


    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="<?=site_url('Painel_hemocentro/index')?>"><i class="fa fa-home " aria-hidden="true"></i>Home</a></li>
      <li ><a href="<?=site_url('Painel_hemocentro/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i>Perfil</a></li>
      <li class="active"><a href="<?=site_url('Painel_hemocentro/carregarCadastroEstoque')?>"><i class="fa fa-plus " aria-hidden="true"></i>Novo Estoque</a></li>
      <li><a href="<?=site_url('Painel_hemocentro/carregaMeuEstoque')?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Meu Estoque</a></li>
      <li><a href="<?=site_url('Painel_hemocentro/carregaMeuEstoque')?>"><i class="fa fa-plus" aria-hidden="true"></i>Procurar Doadores</a></li>
      <li><a href="<?=site_url('Painel_hemocentro/editaPerfilHemocentro')?>"><i class="fa fa-cog" aria-hidden="true"></i>Configurações</a></li>
          </ul>


        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"></h1>

          <div class="panel panel-default panel-table">
               <div class="panel-heading ">
                 <div class="row ">
                   <div class="col col-xs-6">
                     <h1 class="panel-title">Adicionar novo Estoque</h1>
                   </div>

                 </div>
               </div>
               <div class="panel-body">
                 <form action="<?=site_url('Painel_hemocentro/carregarCadastroEstoque')?>" method="post">
                        <!-- Entrada nome doador-->
                        <div class="form-group col-lg-3">
                              <label for="sangue_tipoA-">Tipo A-:</label>
                              <input type="text" id="sangue_tipoA-" name="tipo_a0" placeholder="Tipo A-"
                              value="" class="form-control" required  />
                        </div>
                        <!-- Seleção do tipo sanguineo do doador-->
                        <div class="form-group col-lg-3">
                              <label for="sangue_tipoA+">Tipo A+:</label>
                              <input type="text" id="sangue_tipoA+" name="tipo_a1" placeholder="Tipo A+"
                              value="" class="form-control" required  />
                        </div>
                        <div class="form-group col-lg-3">
                              <label for="sangue_tipoB-">Tipo B-:</label>
                              <input type="text" id="sangue_tipoB-" name="tipo_b0" placeholder="Tipo B-"
                              value="" class="form-control" required  />
                        </div>
                        <div class="form-group col-lg-3">
                              <label for="sangue_tipoB+">Tipo B+:</label>
                              <input type="text" id="sangue_tipoB+" name="tipo_b1" placeholder="Tipo B+"
                              value="" class="form-control" required  />
                        </div>
                        <div class="form-group col-lg-3">
                              <label for="sangue_tipoAB-">Tipo AB-:</label>
                              <input type="text" id="sangue_tipoAB-" name="tipo_ab0" placeholder="Tipo AB-"
                              value="" class="form-control" required  />
                        </div>
                        <!-- Seleção do tipo sanguineo do doador-->
                        <div class="form-group col-lg-3">
                              <label for="sangue_tipoAB+">Tipo AB+:</label>
                              <input type="text" id="sangue_tipoAB+" name="tipo_ab1" placeholder="Tipo AB+"
                              value="" class="form-control" required  />
                        </div>
                        <div class="form-group col-lg-3">
                              <label for="sangue_tipoO-">Tipo O-:</label>
                              <input type="text" id="sangue_tipoO-" name="tipo_o0" placeholder="Tipo O-"
                              value="" class="form-control" required  />
                        </div>
                        <div class="form-group col-lg-3">
                              <label for="sangue_tipoO+">Tipo O+:</label>
                              <input type="text" id="sangue_tipoO+" name="tipo_o1" placeholder="Tipo O+"
                              value="" class="form-control" required  />
                        </div>

                    <h5>*Campos obrigatórios</h5>
                    <!-- Botão para cadastrar-->
                    <div class="col-lg-3">
                          <button type="submit" class="btn btn-danger">
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
