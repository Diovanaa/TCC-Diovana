
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>


  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">HemoUnião</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?=site_url('Painel_hemocentro/deslogar')?>">Sair</a></li>

          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

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
                        <div class="form-group col-lg-6">
                              <label for="nomeHemocentro">Nome Hemocentro*:</label>
                              <input type="text" id="nomeHemocentro" name="hemocentro_nome" placeholder="Nome do Hemocentro"
                              value="" class="form-control" required  />
                        </div>
                        <!-- Seleção do tipo sanguineo do doador-->
                        <div class="form-group col-lg-6">
                            <label for="tipoDoacao">Tipo de Doação*:</label>
                                 <select class="form-control" name="doacao_tipodoacao" id="tipoDoacao">
                                      <option>Doação de sangue total</option>
                                      <option>Doação por aferise</option>
                                      <option>Doação de medula óssea</option>

                                </select>
                       </div>
                        <!-- Entrada data de nascimento do doador-->
                        <div class="form-group col-lg-6">
                             <label for="dataDoacao">Data da doação*:</label>
                             <input type="date" id="dataDoacao" name="doacao_datadoacao"
                             value="" class="form-control" required placeholder="Data da doação" />
                        </div>
                        <!-- Entrada telefone do doador-->
                        <div class="form-group col-lg-6">
                             <label for="ultimaDoacao">Data ultima doação*:</label>
                             <input type="date" id="ultimaDoacao" name="doacao_ultimadoacao" placeholder="Data da ultima doação"
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
