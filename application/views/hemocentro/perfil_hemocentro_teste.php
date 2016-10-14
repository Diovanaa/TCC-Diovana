
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
            <input type="text" class="form-control" placeholder="Procurar...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="<?=site_url('Painel_hemocentro/index')?>"><i class="fa fa-home " aria-hidden="true"></i>Home</a></li>
      <li class="ativo"><a href="<?=site_url('Painel_hemocentro/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i>Perfil</a></li>
      <li ><a href="<?=site_url('Painel_hemocentro/carregarCadastroEstoque')?>"><i class="fa fa-plus " aria-hidden="true"></i>Novo Estoque</a></li>
      <li><a href="<?=site_url('Painel_hemocentro/carregaMeuEstoque')?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Meu Estoque</a></li>
      <li><a href="<?=site_url('Painel_hemocentro/carregaMeuEstoque')?>"><i class="fa fa-plus" aria-hidden="true"></i>Procurar Doadores</a></li>
      <li><a href="<?=site_url('Painel_hemocentro/editaPerfilHemocentro')?>"><i class="fa fa-cog" aria-hidden="true"></i>Configurações</a></li>
          </ul>


        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Hemocentro</h1>

          <div class="panel panel-default panel-table">
                       <div class="panel-heading ">
                         <div class="row ">
                           <div class="col col-xs-6">
                             <h1 class="panel-title">Meus dados</h1>
                           </div>
                           <div class="col col-xs-6 text-right">


                             <!--  <a href="<?=site_url('Painel_hemocentro/carregaMinhasDoacoes')?>">
                             </a>-->

                                     <a href="<?=site_url('Painel_hemocentro/editaPerfilHemocentro')?>" class="btn btn-danger">Editar</a>

                           </div>
                         </div>
                       </div>
                       <div class="panel-body">
                         <table class="table">

                         <tbody id="myTable">
                         <tr>
                           <td><b>Nome:</b> </td>
                           <td> <?php echo $dadosHemocentro->nome;?> </td>
                         </tr>
                         </tbody>
                         <tbody id="myTable">
                         <tr>
                           <td> <b>Telefone:</b></td>
                           <td> <?php echo $dadosHemocentro->telefone;?> </td>
                         </tr>
                         </tbody>
                         <tbody id="myTable">
                         <tr>
                           <td><b>Estado:</b> </td>
                           <td> <?php echo $dadosHemocentro->estado;?> </td>
                         </tr>
                         </tbody>
                         <tbody id="myTable">
                         <tr>
                           <td><b>Cidade:</b> </td>
                           <td> <?php echo $dadosHemocentro->cidade;?> </td>
                         </tr>
                         </tbody>
                         <tbody id="myTable">
                         <tr>
                           <td> <b>Endereço:</b></td>
                           <td> <?php echo $dadosHemocentro->endereco;?> </td>
                         </tr>
                         </tbody>
                         <tbody id="myTable">
                         <tr>
                           <td> <b>Bairro:</b></td>
                           <td> <?php echo $dadosHemocentro->bairro;?> </td>
                         </tr>
                         </tbody>
                         <tbody id="myTable">
                         <tr>
                           <td> <b>CEP:</b></td>
                           <td> <?php echo $dadosHemocentro->cep;?> </td>
                         </tr>
                         </tbody>

                         <tbody>
                           <tr>

                           </tr>
                         </tbody>
                         </table>

                       </div>

                       </div>





             <div class="panel panel-default panel-table">
                          <div class="panel-heading ">
                            <div class="row ">
                              <div class="col col-xs-6">
                                <h1 class="panel-title">Minhas Doações</h1>
                              </div>
                              <div class="col col-xs-6 text-right">


                                  <a href="<?=site_url('painel_doador/carregaMinhasDoacoes')?>">
                                      </a>

                                        <a href="<?=
                                        site_url('painel_doador/carregarCadastroDoacao')?>" class="btn btn-danger">Nova Doação</a>

                              </div>
                            </div>
                          </div>
                          <div class="panel-body">

                            <table class="table">
                            <thead>
                                <tr>
                                    <th>Nome Hemocentro</th>
                                    <th>
                                      Tipo doação
                                    </th>
                                    <th>Data Doação</th>
                                    <th>Data Ultima Doação</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                            <?php if (!empty($dadosDoacao)):
                               foreach ($dadosDoacao as $row): ?>
                                        <td>
                                          <?php echo $row->hemocentro_nome;?>
                                        </td>
                                        <td>
                                          <?php echo $row->tipo_doacao;?>
                                        </td>
                                        <td><?php echo $row->data_doacao; ?></td>
                                        <td><?php echo $row->data_ultimadoacao; ?></td>
                                        <td>
                                          <a class="btn btn-primary"><em class="fa fa-pencil"></em></a>
                                          <a  href="<?= site_url('painel_doador/excluir/' . $row->id_doacao . '/' . $row->id_doador ) ?>"
                                            class="btn btn-danger"
                                            onclick="return confirm('Têm certeza que deseja excluir esta informação?')">
                                              <i class="fa fa-trash" aria-hidden="true"></i>
                                          </a>

                                        </td>


                                  </tr>
                                        <?php endforeach; ?>
                                      <?php else: {
                                        echo "<td colspan='5' align = 'center'>
                                      Você não tem nenhuma Doação
                                                  </td>";
                                      } ?>
                                      <?php	endif; ?>
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
