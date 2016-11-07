


    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/index')?>"><i class="fa fa-home " aria-hidden="true"></i> Home</a></li>
            <li><a class="fonte2" href="<?=site_url('Painel_hemocentro/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a></li>
            <li class="active"><a class="fonte2" href="<?=site_url('Painel_hemocentro/carregaHorarioColeta')?>"><i class="fa fa-clock-o " aria-hidden="true"></i> Horario de coletas</a></li>
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
                     <h1 class="panel-title">Dias de coleta</h1>
                   </div>

                 </div>
               </div>
               <div class="panel-body">
                 <form action="<?=site_url('Painel_hemocentro/salvarEstoque')?>" method="post">
                        <!-- Entrada nome doador-->
                        <div class="form-group col-lg-4">
                            <label for="tiposanguineoDoador">Segunda*:</label>
                                 <select class="form-control" name="doador_tipo_sanguineo" id="tipoSanguineo">
                                      <option value="A-">segunda o dia todo</option>
                                      <option value="A+">Segunda de manha</option>
                                      <option value="B-">Segunda de tarde</option>
                                      <option value="B+">Segunda a noite</option>
                                    </select>
                       </div>
                       <div class="form-group col-lg-4">
                           <label for="tiposanguineoDoador">Terça*:</label>
                                <select class="form-control" name="doador_tipo_sanguineo" id="tipoSanguineo">
                                     <option value="A-">Terça o dia todo</option>
                                     <option value="A+">Terça de manha</option>
                                     <option value="B-">Terça de tarde</option>
                                     <option value="B+">Terça a noite</option>
                                   </select>
                      </div>
                      <div class="form-group col-lg-4">
                          <label for="tiposanguineoDoador">Quarta*:</label>
                               <select class="form-control" name="doador_tipo_sanguineo" id="tipoSanguineo">
                                    <option value="A-">Quarta o dia todo</option>
                                    <option value="A+">Quarta de manha</option>
                                    <option value="B-">Quarta de tarde</option>
                                    <option value="B+">Quarta a noite</option>
                                  </select>
                     </div>
                     <div class="form-group col-lg-4">
                         <label for="tiposanguineoDoador">Quinta*:</label>
                              <select class="form-control" name="doador_tipo_sanguineo" id="tipoSanguineo">
                                   <option value="A-">Quinta o dia todo</option>
                                   <option value="A+">Quinta de manha</option>
                                   <option value="B-">Quinta de tarde</option>
                                   <option value="B+">Quinta a noite</option>
                                 </select>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="tiposanguineoDoador">Sexta*:</label>
                             <select class="form-control" name="doador_tipo_sanguineo" id="tipoSanguineo">
                                  <option value="A-">Sexta o dia todo</option>
                                  <option value="A+">Sexta de manha</option>
                                  <option value="B-">Sexta de tarde</option>
                                  <option value="B+">Sexta a noite</option>
                                </select>
                   </div>
                   <div class="form-group col-lg-4">
                       <label for="tiposanguineoDoador">Sabado*:</label>
                            <select class="form-control" name="doador_tipo_sanguineo" id="tipoSanguineo">
                                 <option value="A-">Sabado o dia todo</option>
                                 <option value="A+">Sabado de manha</option>
                                 <option value="B-">Sabado de tarde</option>
                                 <option value="B+">Sabado a noite</option>
                               </select>
                  </div>
                  <div class="form-group col-lg-4">
                      <label for="tiposanguineoDoador">Domingo*:</label>
                           <select class="form-control" name="doador_tipo_sanguineo" id="tipoSanguineo">
                                <option value="A-">Domingo o dia todo</option>
                                <option value="A+">Domingo de manha</option>
                                <option value="B-">Domingo de tarde</option>
                                <option value="B+">Domingo a noite</option>
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
