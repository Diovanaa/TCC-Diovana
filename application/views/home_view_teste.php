

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top cor1">
      <div class="container cor1">
        <div class="navbar-header">

          <a class="navbar-brand" href="#">HemoUnião</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse ">
          <ul class="nav navbar-nav pull-right " >

						<li><a class="branco" data-toggle="modal" href="<?=site_url('home')?>" >
	              <i class="fa fa-home branco" aria-hidden="true"></i>	 Home</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle branco" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Entrar <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="<?= site_url('login/loginDoador') ?>"><i class="fa fa-user"></i> Sou Doador</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?= site_url('login/loginHemocentro') ?>"><i class="fa fa-tint"></i> Sou Hemocentro</a>
                        </li>
                    </ul>
                </li>

                </ul>
          </ul>
        </li>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</br>
<br>
<br>
<br>
<div class="container theme-showcase" role="main">


    <!-- Carousel
   ================================================== -->
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <!-- Indicators -->
     <ol class="carousel-indicators">
       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
     </ol>
     <div class="carousel-inner" role="listbox">
       <div class="item active">
         <img class="first-slide" src="<?=base_url('assets/img/primavera3.jpg')?>" alt="First slide">
         <div class="container">
           <div class="carousel-caption">

           </div>
         </div>
       </div>
       <div class="item">
         	<img class="second-slide" src="<?=base_url('assets/img/primavera.jpg')?>" alt="Second slide">

         <div class="container">
           <div class="carousel-caption">

           </div>
         </div>
       </div>
       <div class="item">
         <img class="third-slide" src="<?=base_url('assets/img/primavera1.jpg')?>" alt="Third slide">
         <div class="container">
           <div class="carousel-caption">
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


    <div class="row fundo">
      <div class="col-lg-12 ">
        <div class="row col-lg-12 diferente fundo">

             <div class="col-lg-2 col-md-6 col-xs-12 diferente1">
               <a class="diferente" href="<?=site_url('cadastro/chamandoCadastroDoador')?>" ></br>Cadastro de doador</a>
             </div>
             <div class="col-lg-2 col-md-6 col-xs-12 diferente2">
               <a class="diferente" href="<?=site_url('como_doar/chamandoComoDoar')?>" ></br>Como doar</a>
             </div>
             <div class="col-lg-2 col-md-6 col-xs-12 diferente3">
              <a class="diferente" href="<?=site_url('cadastro/chamandoCadastroHemocentro')?>" ></br> Cadastro de hemocentro  </a>
             </div>
             <div class="col-lg-2 col-md-6 col-xs-12 diferente4">
               <a class="diferente" href="<?=site_url('ondedoar/chamandoOndeDoar')?>" > </br> Onde doar? </a>
             </div>
             <div class="col-lg-2 col-md-6 col-xs-12 diferente5">
               <a class="diferente" href="<?=site_url('como_doar/chamandoComoDoar')?>" ></br>Estoques</a>
             </div>
             <div class="col-lg-2 col-md-6 col-xs-12 diferente6">
              <a class="diferente" href="<?=site_url('login/loginHemocentro')?>" ></br>Sangue</a>
             </div>

</div>
</div>
</div>
</br>

<div>
<br>
