


    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

          <a class="navbar-brand" href="#">HemoUnião</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right " >

						<li><a data-toggle="modal" href="<?=site_url('home')?>" >
	              <i class="fa fa-home" aria-hidden="true"></i>	 Home</a></li>





            <li class="dropdown">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <span class="caret"></span></a>
                <ul id="login-dp" class="dropdown-menu">
                <li>
                   <div class="row">
                      <div class="col-md-12">

                        <div class="form-group ">
                          <label for="tipoEntrada">Entrar como:</label>
                  						<select class="form-control">
                  							<option>Selecione</option>
                  							<option>Doador</option>
                  							<option>Hemocentro</option>

                  						</select>
                        </div>
                            <label for="Email">Email:</label>
                         <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                            <div class="form-group">
                               <label class="sr-only" for="exampleInputEmail2">Endereço de Email</label>
                               <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Endereço de Email" required>
                            </div>
                            <label for="Senha">Senha:</label>
                            <div class="form-group">
                               <label class="sr-only" for="exampleInputPassword2">Senha</label>
                               <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Senha" required>
                             </div>
                            <div class="form-group">
                               <button type="submit" class="btn btn-primary btn-block btn-danger">Entrar</button>
                            </div>

                         </form>
                      </div>

                   </div>
                </li>
                </ul>
                <li><a data-toggle="modal" href="<?=base_url('doacao')?>" >
                    <i class="fa fa-heart" aria-hidden="true">
                    </i>  Doação</a>
                </li>
                <li><a data-toggle="modal" href="<?=site_url('login/loginDoador')?>" >
    								<i class="fa fa-tint" aria-hidden="true"></i>  Sangue</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</br>
<div class="col-lg-12 home">
<div class="row col-lg-12 diferente ">
  <div class="col-lg-2"></div>

    <a href="<?=site_url('cadastro/chamandoCadastroDoador')?>" > <div class="col-lg-3 col-xs-12 diferente1"><h2 class="diferente"></br></br></br>Cadastro de Doador</h2></div></a>


    <a href="<?=site_url('cadastro/chamandoCadastroHemocentro')?>" ><div class="col-lg-3 col-xs-12 diferente2"> <h2 class="diferente"></br></br></br>Como Doar</h2></div></a>


<a href="<?=site_url('cadastro/chamandoCadastroHemocentro')?>" >
  <div class="col-lg-3 col-xs-12 diferente3">
    <h2 class="diferente"></br></br></br>Cadastro de Hemocentro</h2>
  </div>
</a>


</div>
<div class="row col-lg-12 diferente ">
  <div class="col-lg-2"></div>

    <a href="<?=site_url('cadastro/chamandoCadastroDoador')?>" > <div class="col-lg-3 col-xs-12 diferente4"><h2 class="diferente"></br></br></br>Onde Doar?</h2></div></a>


    <a href="<?=site_url('cadastro/chamandoCadastroHemocentro')?>" ><div class="col-lg-3 col-xs-12 diferente5"> <h2 class="diferente"></br></br></br>Estoques</h2></div></a>


<a href="<?=site_url('cadastro/chamandoCadastroHemocentro')?>" > <div class="col-lg-3 col-xs-12 diferente6"><h2 class="diferente"></br></br></br>Perguntas Frequentes</h2></div></a>


</div>
</div>
</br>
<hr class="featurette-divider">
