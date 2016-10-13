<link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">
<link href="<?=base_url('assets/css/signin.css')?>" rel="stylesheet">
<link href="<?=base_url('assets/css/cadastro.css')?>" rel="stylesheet">
<title>home - HemoUnião</title>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?xml version="1.0" encoding="ISO-8859-1" ?>


<html lang="pt-br">
	<head>
	<link rel="icon" type="image/png" href="img/favicon.ico">
	<meta charset="utf-8">
	<link rel="stylesheet" href="assets/css/style.css" media="screen" title="no title" charset="utf-8">
	<link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/ie10-viewport-bug-workaround.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/carousel.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/bootstrap.css')?>" rel="stylesheet" />
	<link href="<?=base_url('assets/css/login-register.css')?>" rel="stylesheet" />

	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<script src="<?=base_url('assets/js/ie-emulation-modes-warning.js')?>"></script>
	<script src="<?=base_url('jquery/jquery-1.10.2.js')?>" type="text/javascript"></script>
	<script src="<?=base_url('assets/js/bootstrap.js')?>" type="text/javascript"></script>
	<script src="<?=base_url('assets/js/login-register.js')?>" type="text/javascript"></script>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>

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
								<li><a data-toggle="modal" href="<?=site_url('sangue')?>" >

								<i class="fa fa-tint" aria-hidden="true"></i>  Sangue</a></li>



						<li><a data-toggle="modal" href="<?=base_url('doacao')?>" >

						<i class="fa fa-heart" aria-hidden="true"></i>  Doação</a></li>


						<li><a data-toggle="modal" href="<?=site_url('login')?>" onclick="openLoginModal();">
                <i class="fa fa-user" aria-hidden="true"></i>	 Logado</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</br>

<div class="baixo">
<div class="row ">
<div class="col-lg-4 ">
	<div class="sidebar-offcanvas " id="sidebar">
	          <div class="list-group">
	            <a href="#" class="list-group-item "> Procure um doador</a>
							<a href="#" class="list-group-item"> Listar Doadores</a>
	            <a href="#" class="list-group-item"> Cadastrar Doação</a>
							<a href="#" class="list-group-item"> Editar Perfil</a>
							<a href="#" class="list-group-item"> Agenda de doações</a>
	          </div>
					</div>
	        </div><!--/.sidebar-offcanvas-->
<div class="col-lg-8">
	<div class="row">
		<h3 class="sobre1"> Procure por um Doador: </h3>
	</br>
  <div class="form-group">
    <label for="tiposanguineoDoador">Tipo Sanguineo:</label>
    <select class="form-control">
      <option>A-</option>
      <option>A+</option>
      <option>B-</option>
      <option>B+</option>
      <option>AB-</option>
      <option>AB+</option>
      <option>O-</option>
      <option>O+</option>
    </select>
  </div>

		<div class="form-group">
			<label for="ufHemocentro">Estado:</label>
			<input type="text"
			id="ufHemocentro" name="hemocentro_uf"
			value="" class="form-control" required  />
		</div>
		<div class="form-group">
		<label for="cidadeHemocentro">Cidade:</label>
		<input type="text"
		id="cidadeHemocentro" name="hemocentro_cidade"
		value="" class="form-control" required  />
	</div>
	<button type="submit" class="btn btn-danger">
		Procurar
	</button>

	</div><!-- /.row -->
</div>
</div>
</div>

</br>
<hr class="featurette-divider">



<div class="row">
</br>
</br><hr class="featurette-divider">
    <div class="col-md-3">
          <p class="rodape">Entre em contato
             49 3455.6897
          </p>
    </div>
<div class="col-md-3">
          <p class="rodape">Rua Dirceu Giordani, 53
             B. Jardin Universitário - Xanxerê (SC)
          </p>
</div>
<div class="col-md-3">
          <p class="rodape">Todos os direitos reservados
             © 2016 HemoUnião
           </p>
</div>

</div>
 <script
   src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script>
   window.jQuery
       || document
           .write(
               '<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
 </script>


 <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
 <script src="<?=base_url('../../assets/js/vendor/holder.min.js')?>"></script>
 <script src="<?=base_url('assets/js/ie10-viewport-bug-workaround.js')?>"></script>


</body>
</html>
