

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

<div class="baixo">
<div class="row  ">
  <div class="col-lg-1">
  </div>
<div class="col-lg-3 ">
	<div class="sidebar-offcanvas " id="sidebar">
	          <div class="list-group">
	            <a href="<?=site_url('cadastro/chamandoCadastroDoador')?>"class="list-group-item sobre1"> Doador cadastre-se</a>
	            <a href="<?=site_url('cadastro/chamandoCadastroHemocentro')?>" class="list-group-item sobre1"> Hemocentros cadastre-se</a>
							<a href="#" class="list-group-item sobre1"> Encontre o Hemocentro mais próximo</a>
							<a href="#" class="list-group-item sobre1"> Estoques</a>
	          </div>
					</div>
	        </div><!--/.sidebar-offcanvas-->
<div class="col-lg-8">
	<div class="row">
		<h2 class="sobre1"> Conheça mais sobre doação de sangue</h2>
	</br>
		<div class="col-lg-6 centro">
			<img class="img-circle " src="<?=base_url('assets/img/comodoar.jpg')?>" alt="Generic placeholder image" width="140" height="140"></br>
			<h5 class="sobre">Saiba mais sobre como doar sangue</h3>
		</div><!-- /.col-lg-4 -->

		<div class="col-lg-6 centro">
			<img class="img-circle " src="<?=base_url('assets/img/ondedoar.jpg')?>" alt="Generic placeholder image" width="140" height="140"></br>
			<h5 class="sobre">Saiba onde doar</h3>
		</div><!-- /.col-lg-4 -->

		<div class="col-lg-6 centro">
			<img class="img-circle " src="<?=base_url('assets/img/agendar.jpg')?>" alt="Generic placeholder image" width="140" height="140"></br>
			<h5 class="sobre">Agende aqui sua próxima coleta</h3>
		</div><!-- /.col-lg-4 -->

		<div class="col-lg-6 centro">
			<img class="img-circle " src="<?=base_url('assets/img/perguntas.jpg')?>" alt="Generic placeholder image" width="140" height="140"></br>
			<h5 class="sobre">Veja nosso faq de perguntas frequentes</h3>
		</div><!-- /.col-lg-4 -->

	</div><!-- /.row -->
</div>
</div>
</div>

</br>
<hr class="featurette-divider">
