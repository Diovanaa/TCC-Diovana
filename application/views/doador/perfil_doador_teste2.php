

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a class="fonte2" href="<?=site_url('painel_doador/index')?>"><i class="fa fa-home " aria-hidden="true"></i> Home</a></li>
            <li class="active"><a class="fonte2" href="<?=site_url('painel_doador/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/localizarHemocentros')?>"><i class="fa fa-map-marker" aria-hidden="true"></i> Hemocentros</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/carregarCadastroDoacao')?>"><i class="fa fa-plus " aria-hidden="true"></i> Nova Doação</a></li>
            <li><a class="fonte2" href="<?=site_url('painel_doador/mensagens')?>"><i class="fa fa-envelope " aria-hidden="true"></i> Mensagens</a></li>
          <!--  <li><a class="fonte2" href="<?=site_url('painel_doador/carregaMinhasDoacoes')?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Minhas Doações</a></li>-->
            <li><a class="fonte2" href="<?=site_url('painel_doador/editaPerfilDoador')?>"><i class="fa fa-cog" aria-hidden="true"></i> Configurações</a></li>

            <!--<li><a class="fonte2" href="<?=site_url('painel_doador/doarAqui')?>"><i class="fa fa-map-marker" aria-hidden="true"></i> Doar em um hemocentros</a></li>-->
          </ul>


        </div>
        <br>
        <div  class="col-sm-9 col-sm-offset-2 row">
                              <?php if ($this->input->get('alerta') == 1) { ?>
                              <div class="alert alert-success">
                                Você excluiu a Mensagem com sucesso!!!
                              </div>
                              <?php } ?>
                  </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><?php echo $dadosDoador->nome; ?></h1>

          <div class="panel panel-default panel-table">
               <div class="panel-heading ">
                 <div class="row ">
                   <div class="col col-xs-6">
                     <h1 class="panel-title">Meus dados</h1>
                   </div>
                   <div class="col col-xs-6 text-right">


                       <a href="<?=site_url('painel_doador/carregaMinhasDoacoes')?>">
                           </a>

                             <a href="<?=
                             site_url('painel_doador/editaPerfilDoador')?>" class="btn btn-primary">Editar</a>

                   </div>
                 </div>
               </div>
               <div class="panel-body">
                 <table class="table">

                 <tbody id="myTable">
                 <tr>
                   <td><b>Nome:</b> </td>
                   <td> <?php echo $dadosDoador->nome;?> </td>
                 </tr>
                 </tbody>
                 <tbody id="myTable">
                 <tr>
                   <td> <b>Telefone:</b></td>
                   <td> <?php echo $dadosDoador->telefone;?> </td>
                 </tr>
                 </tbody>
                 <tbody id="myTable">
                 <tr>
                   <td><b>Sexo:</b> </td>
                   <td> <?php echo $dadosDoador->sexo;?> </td>
                 </tr>
                 </tbody>
                 <tbody id="myTable">
                 <tr>
                   <td><b>Data de nascimento:</b> </td>
                   <td> <?php echo $dadosDoador->data_nascimento;?></td>
                 </tr>
                 </tbody>
                 <tbody id="myTable">
                 <tr>
                   <td> <b>Tipo Sanguíneo:</b></td>
                   <td> <?php echo $dadosDoador->tipo_sanguineo;?> </td>
                 </tr>
                 </tbody>
                 <tbody id="myTable">
                 <tr>
                   <td> <b>Estado:</b></td>
                   <td> <?php echo $dadosDoador->estado;?> </td>
                 </tr>
                 </tbody>
                 <tbody id="myTable">
                 <tr>
                   <td> <b>Cidade:</b></td>
                   <td> <?php echo $dadosDoador->cidade;?> </td>
                 </tr>
                 </tbody>
                 <tbody id="myTable">
                 <tr>
                   <td><b> Endereço:</b></td>
                   <td> <?php echo $dadosDoador->endereco;?> </td>
                 </tr>
                 </tbody>
                 <tbody>
                   <tr>

                   </tr>
                 </tbody>
                 </table>

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
