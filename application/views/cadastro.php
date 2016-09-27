
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?xml version="1.0" encoding="ISO-8859-1" ?>

<html lang="pt-br">
	<head>
		<link rel="icon" type="image/png" href="img/favicon.ico">
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/css/style.css" media="screen" title="no title" charset="utf-8">
		<link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">

		<link href="<?=base_url('assets/css/carousel.css')?>" rel="stylesheet">
		<link href="<?=base_url('assets/css/bootstrap.css')?>" rel="stylesheet" />
		<link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">
		<link href="<?=base_url('assets/css/signin.css')?>" rel="stylesheet">
		<link href="<?=base_url('assets/css/cadastro.css')?>" rel="stylesheet">
		<title>Cadastro de novo usuário - EuVoluntário</title>

		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

		<script src="<?=base_url('jquery/jquery-1.10.2.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('assets/js/bootstrap.js')?>" type="text/javascript"></script>

		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	</head>

	<body>
		<div class="content"></div>

		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/your.groupid/;jsessionid=B3492B48A59F9AF78373ADB67BDBC592">Eu Voluntário</a>

				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a data-toggle="modal" href="<?=site_url('home')?>" > <i class="fa fa-home" aria-hidden="true"></i> Home</a>
						</li>

					</ul>

					<ul class="nav navbar-nav navbar-right">

						<li>
							<a data-toggle="modal" href="<?=site_url('login')?>" onclick="openLoginModal();"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
						</li>

						<li>
							<a data-toggle="modal" href="<?=base_url('cadastro')?>"> <i class="fa fa-plus" aria-hidden="true"></i> Cadastrar</a>
						</li>

					</ul>
				</div>
			</div>
		</nav>

		<div class="content container-fluid  card col-sm-8 col-sm-offset-2">
			<div class="row content">
				<div>
					<div class="col-sm-8 col-sm-offset-2">
						<h2>Cadastro de novo usuário</h2>
						<p>
							Escolha como você deseja se cadastrar:
						</p>
						<?php echo validation_errors(); ?>
						<?php if ($this->input->get('aviso') == 1) { ?>
						<div class="alert alert-success">
							Cadastrado realizado com sucesso! Por favor faça login para usar o sistema!
						</div>
						<?php } ?>
						<?php if ($this->input->get('aviso') == 2) { ?>
						<div class="alert alert-danger">
							E-mail já cadastrado! Tente inserir outro e-mail, ou se lembrar se já não se cadastrou no sistema!
						</div>
						<?php } ?>
						<ul class="nav nav-tabs">
							<li>
								<a data-toggle="tab" href="#entidade">Voluntário</a>
							</li>
							<li class="active">
								<a data-toggle="tab" href="#ong">ONG</a>
							</li>
						</ul>

						<div class="tab-content">
							<div id="ong" class="tab-pane fade in active">
								</br>
								<form action="<?=site_url('salvar_hemocentro')?>" method="post">
									<div class="form-group">
										<label for="nomeHemocentro">Nome do seu Hemocentro:</label>
										<input type="text"
										id="nomeHemocentro" name="hemocentro_nome"
										value="" class="form-control" required />
									</div>
									<div class="form-group">
										<label for="telefoneHemocentro">Telefone para contato:</label>
										<input type="tel"
										id="telefoneHemocentro" name="Hemocentro_telefone"
										value="" class="form-control" required  />
									</div>
									<div class="form-group">
										<label for="emailHemocentro">E-mail:</label>
										<input type="email"
										name="hemocentro_email" id="emailHemocentro"
										value="" class="form-control" required  />
									</div>

									<div class="form-group">
										<label for="senhaHemocentro">Senha:</label>
										<input type="password"
										id="senhaHemocentro" name="hemocentro_senha"
										value="" class="form-control" required  />
									</div>

									<h3>Endereço do Hemocentro:</h3>
									<div class="form-group">
										<label for="ruaHemocentro">Rua:</label>
										<input type="text"
										id="ruaHemocentro" name="hemocentro_rua"
										value="" class="form-control" required  />
									</div>
									<div class="form-group">
										<label for="bairroHemocentro">Bairro:</label>
										<input type="text"
										id="bairroHecmocentro" name="hemocentro_bairro"
										value="" class="form-control" required  />
									</div>
									<div class="form-group">
										<label for="numeroHemocentro">Número:</label>
										<input type="text"
										id="numeroHemocentro" name="Hemocentro_numero"
										value="" class="form-control" required  />
									</div>
									<div class="form-group">
										<label for="cidadeHemocentro">Cidade:</label>
										<input type="text"
										id="cidadeHemocentro" name="hemocentro_cidade"
										value="" class="form-control" required  />
									</div>
									<div class="form-group">
										<label for="ufHemocentro">UF:</label>
										<input type="text"
										id="ufHemocentro" name="hemocentro_uf"
										value="" class="form-control" required  />
									</div>
									<div class="form-group">
										<label for="cepHemocentro">Cep:</label>
										<input type="text"
										id="cepHemocentro" name="hemocentro_cep"
										value="" class="form-control" required  />
									</div>

									<button type="submit" class="btn btn-primary">
										CADASTRAR <span class="glyphicon glyphicon-ok"></span>
									</button>
									<br>
									<br>
								</form>
							</div>



							<div id="entidade" class="tab-pane fade">
								</br>
								<form action="<?=site_url('salvar_doador')?>" method="post">
									<div class="form-group">
										<label for="nomeDoador">Nome completo:</label>
										<input type="text"
										id="nomeDoador" name="doador_nome"
										value="" class="form-control" required  />
									</div>

									<div class="form-group">
										<label for="datanascimentoDoador">Data de Nascimento:</label>
										<input type="date"
										id="datanascimentoDoador" name="doador_data_nascimento"
										value="" class="form-control" required  />
									</div>
									<div class="form-group">
										<label for="tiposanguineoDoador">Tipo Sanguineo:</label>
										<input type="text"
										id="tiposanguineoDoador" name="doador_tipo_sanguineo"
										value="" class="form-control" required  />
									</div>
									<div class="form-group">
										<label for="fatorRHDoador">Fator RH:</label>
										<input type="text"
										id="fatorRHDoador" name="doador_fatorRH"
										value="" class="form-control" required  />
									</div>
									<div class="form-group">
										<label for="sexoDoador">Sexo:</label>
										<input type="text"
										id="sexoDoador" name="doador_sexo"
										value="" class="form-control" required  />
									</div>
									<div class="form-group">
										<label for="celularDoador">Celular para contato:</label>
										<input type="tel"
										id="celularDoador" name="doador_telefone"
										value="" class="form-control" required  />
									</div>

									<div class="form-group">
										<label for="emailDoador">Email:</label>
										<input type="email"
										id="emailDoador" name="doador_email"
										value="" class="form-control" required  />
									</div>

									<div class="form-group">
										<label for="senhaDoador">Senha:</label>
										<input type="password"
										id="senhaDoador" name="Doador_senha"
										value="" class="form-control" required  />
									</div>
									<button type="submit" class="btn btn-primary">
										CADASTRAR <span class="glyphicon glyphicon-ok"></span>
									</button>
									<br>
									<br>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer class="footer col-sm-8 col-sm-offset-2">
			<div class="container-fluid">

				<p class="pull-right">
					<a href="#">Voltar para o topo.</a>
				</p>

				<p>
					Eu Voluntário - 2016
				</p>

		</footer>
		</div>
		<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
		</script>

		<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
		<script src="<?=base_url('../../assets/js/vendor/holder.min.js')?>"></script>

	</body>
</html>
