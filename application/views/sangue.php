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
								<li><a data-toggle="modal" href="<?=base_url('sangue')?>" >

								<i class="fa fa-tint" aria-hidden="true"></i>  Sangue</a></li>



						<li><a data-toggle="modal" href="<?=base_url('doacao')?>" >

						<i class="fa fa-heart" aria-hidden="true"></i>  Doação</a></li>


						<li><a data-toggle="modal" href="<?=site_url('login')?>" onclick="openLoginModal();">
                <i class="fa fa-user" aria-hidden="true"></i>	 Login</a></li>
								<li><a data-toggle="modal" href="<?=base_url('cadastro')?>">
	              <i class="fa fa-plus" aria-hidden="true"></i> Cadastrar</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide baixo" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner tamanho" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?=base_url('assets/img/bannerdoacao.jpg')?>" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>

							<p >
															<a class="btn btn-lg btn-danger"
  								href="<?=base_url('cadastro')?>" role="button">CADASTRE-SE</a>
  						</p>

            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?=base_url('assets/img/bannerdoacao.jpg')?>" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p></p>

            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?=base_url('assets/img/bannerdoacao.jpg')?>" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p></p>

            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
</div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="<?=base_url('assets/img/comodoar.jpg')?>" alt="Generic placeholder image" width="140" height="140">
          <h3 class="sobre">Saiba mais sobre como doar sangue</h3>


        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?=base_url('assets/img/ondedoar.jpg')?>" alt="Generic placeholder image" width="140" height="140">
          <h3 class="sobre">Saiba onde doar</h3>


        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?=base_url('assets/img/agendar.jpg')?>" alt="Generic placeholder image" width="140" height="140">
          <h3 class="sobre">Agende aqui sua próxima coleta</h3>


        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      <br/>
      <div class="row esconde">
        <div class="col-lg-4">
          <img class="img-circle" src="<?=base_url('assets/img/solucaoextra.jpg')?>" alt="Generic placeholder image" width="140" height="140">
          <h3 class="sobre">Veja nosso cronograma de coletas extra</h3>


        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?=base_url('assets/img/perguntas.jpg')?>" alt="Generic placeholder image" width="140" height="140">
          <h3 class="sobre">Veja nosso faq de perguntas frequentes</h3>


        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?=base_url('assets/img/gota.jpg')?>" alt="Generic placeholder image" width="140" height="140">
          <h3 class="sobre">A gota que faltava</h3>


        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <a name="sistema"> </a>
        <div class="col-md-6">
          <h2 class="featurette-heading titulo"> Up!Live Softwares </h2>
<p class="para conheca"><br/> Inove, reduza custos operacionais, e aumente suas vendas!<br/>
Com UP!Live a equipe tem mais facilidade para gerenciar as ordens de serviço, sobrando mais tempo para focar em novos negócios.<p/>
        </div>
        <div class="col-md-6">
          <img class="featurette-image img-responsive center-block" src="img/sistema.jpg" alt="">
        </div>
      </div>

      <hr class="featurette-divider">

          <div class="container">
            <!-- Example row of columns -->
            <div class="row">

              <h2 class="titulo"> Conheça o sistema <h2/><br/>
              <div class="col-md-4">

                <p class="conheca">O Up!Serviços é um sistema de ordem de serviço para os mais diferentes tipos de comércio. Proporcionando
                sempre o melhor para nossos clientes. </p>

              </div>
              <div class="col-md-4">

                <p class="conheca"> Com ele você pode registrar seus pedidos, controlar seu caixa, cadastrar clientes, funcionários e muito mais!
                </p>

             </div>
              <div class="col-md-4">

                <p  class="conheca">
                   Lançado em 2016 o Sistema Up!Serviços é um sucesso, mais de 2 mil lojas utilizam o Up!Serviços
                   e esse numero não para de crescer!</p>

              </div>
            </div>
  <hr class="featurette-divider">
  <a name="empresa"> </a>
  <h2 class="featurette-heading titulo"> Sobre a Empresa </h2>
            <div class="row featurette">

              <div class="col-md-6">

            <p class=" meio conheca"><br/>A Up!Live é uma empresa especializada em Sistemas de Gestão Comercial.
No mercado desde 2014 adquirimos grandes conhecimentos sobre o dia-a-dia dos pequenos comércios,
 por isso oferecemos sistemas fáceis de usar e de implantar, com o objetivo de resolver os principais
  problemas do estabelecimento.<p/>
              </div>
              <div class="col-md-6 esconde">

<p class=" meio conheca "><br/>
Criadora do consagrado Software Up!Vendas Gerenciador de Vendas, e agora com nosso mais novo software o Up!Serviços possui conhecimento do dia-dia
de seus clientes e oferece soluções de qualidade para transformar o gerenciamento de um comércio em uma tarefa simples,
fácil e segura. </p>
                      </div>
            </div>

            <hr class="featurette-divider esconde">

            <div class="row featurette esconde">
                <h2 class="featurette-heading titulo "> Nossa Missão</h2>
              <div class="col-md-6">

                <h3 class="fonte1"><br/> Satisfazer os clientes com soluções inovadoras, buscando a atualização tecnológica,
                   visando às novas oportunidades de mercado.</h3>
              </div>
              <div class="col-md-6">

                <h3 class="fonte1"></br>Conquistar e manter um ambiente harmonioso e de prosperidade,
                   primando pela melhoria contínua em todos os segmentos da organização. </h3>
              </div>
            </div>

      <hr class="featurette-divider esconde">

            <div class="row featurette esconde">
              <div class="centro">
                <img  src="img/coroa.png" alt="" >
                <h2 class="featurette-heading titulo "> Nosso Diferencial</h2>
                </div>
              <div class="col-md-6 ">
                <h3 class="sobre"> Simplicidade</h3>
              <h3 class="conheca"> Após anos de esperiência criando sistemas para pequenos comércios,
                 sabemos bem dos principais desafios da automação comercial.
É por isso que criamos interfaces simples e fáceis de usar. Nossos programas
são criados para serem utilizados instantaneamente a partir da instalação. </h3>

              </div>
              <div class="col-md-6 ">
<h3 class="sobre"> Atendimento</h3>
<h3 class="conheca">A equipe de atendimento da Up!Live é formada por alunos da Universidade
  do Oeste de Santa Catarina - (UNOESC) que sabem lidar muito bem com as dúvidas e dificuldades
   de nossos clientes. Resolvendo assim a maioria dos problemas em poucos minutos. </h3>
              </div>
            </div>


      <hr class="featurette-divider esconde">


                 
<hr class="featurette-divider ">

<div class="row container icones">
			<div class=" col-xs-12 col-sm-12 col-md-12">
				<div class=" col-xs-4 col-md-4 text-center">
					<a href="https://pt-br.facebook.com/" title="Titulo"> <i class="fa fa-facebook grande" > </i> </a><b class="esconde conheca">FACEBOOK</b>
				</div>
				<div class=" col-xs-4 col-md-4 text-center">
					<a href="https://twitter.com/?lang=pt-br" title="Titulo"> <i class="fa fa-twitter grande" > </i> </a><b class="esconde conheca">TWITTER</b>
				</div>
				<div class=" col-xs-4 col-md-4 text-center">
					<a href="https://www.instagram.com/" title="Titulo"> <i class="fa fa-instagram grande" > </i> </a> <b class="esconde conheca">INSTAGRAM</b>
				</div>
			</div>
		</div>
<hr class="featurette-divider">
    </div><!-- /.container -->
<div class="row">
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
             © 2015 Up!Live Softwares
           </p>
</div>
  <div class="col-md-3 direita">
    <a href="#"><img class="img-circle" src="img/icone.png" alt="Generic placeholder image" width="60" height="60"></a>
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
