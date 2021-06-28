<?php

 $idioma=$_GET['var_idioma'];
 echo $idioma;

 if ($idioma == 2)
{
        include('idiomas/eng.php');
}
else
{
    include('idiomas/esp.php');
}

?>


<!DOCTYPE html>
<html class="csstransforms csstransforms3d csstransitions" lang="es">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Simposio Iberoamericano Multidisciplinario de Ciencias e Ingenierías">
  <meta name="keywords" content="simposio, congreso, talleres, ingenieria, upp, pachuca">
  <meta name="author" content="David Luna">

  <title>UPP - SIMCI</title>

  <link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="./imu/prettyPhoto.css" rel="stylesheet">
  <!-- iconos -->
  <link href="./font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
  <link href="./imu/animate.css" rel="stylesheet">
  <link href="./imu/main.css" rel="stylesheet">
  <link href="./imu/responsive.css" rel="stylesheet">
  <link rel="shortcut icon" href="./images/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./images/apple-touch-icon-144-precomposed.fw.png">

</head>
<!--/head-->

<body>
  <!--/.preloader-->
  <header id="navigation">
    <div class="navbar navbar-inverse navbar-fixed-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						  <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
					  </button>
          <a class="navbar-brand" href="http://www.upp.edu.mx"><h1><img src="./imu/logo.fw.png" alt="logo"></h1></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="scroll active"><a href="#navigation"><?php echo $menu01; ?></a></li>
            <li class="scroll"><a href="#download"><?php echo "Descarga"; ?></a></li>
            <li class="scroll"><a href="#about-us"><?php echo $menu02; ?></a></li>
            <li class="scroll"><a href="#ejes"><?php echo $menu03; ?></a></li>
            <li class="scroll"><a href="#comiteorg"><?php echo $menu04; ?></a></li>
            <li class="scroll"><a href="#poster"><?php echo $menuPOS; ?></a></li>
            <li class="scroll"><a href="#ponentesX"><?php echo $menuPON; ?></a></li>
            <li class="scroll"><a href="#trabajos"><?php echo $menu05; ?></a></li>
            <li class="scroll"><a href="#costos"><?php echo $menu06; ?></a></li>
            <li class="scroll"><a href="#registro">Registro</a></li>
            <li class="scroll"><a href="#clients"><?php echo $menu07; ?></a></li>
            <li class="scroll"><a href="#blog"><?php echo $menu08; ?></a></li>
            <li class="scroll"><a href="#hospedaje"><?php echo $menuHOS; ?></a></li>
            <li class="scroll"><a href="#id_fullprof">FULLPROF</a></li>
            <li class="scroll"><a href="#contact"><?php echo $menu09; ?></a></li>
            <li class="scroll">
              <a href="index.php?var_idioma=1" target="_self">
                <img src="./images/mex.png">
              </a>
            </li>
            <li class="scroll">
              <a href="index.php?var_idioma=2" target="_self">
                <img src="./images/usa.png">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--/navbar-->
  </header>
  <!--/#navigation-->

  <section id="home">
    <div class="home-pattern"></div>
    <div id="main-carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#main-carousel" data-slide-to="1" class=""></li>
        <li data-target="#main-carousel" data-slide-to="2" class=""></li>
      </ol>
      <!--/.carousel-indicators-->
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(&quot;images/slider/<?php echo $slider03_imagen; ?>&quot;); height: 765px;">

          <div class="carousel-caption">
            <div>
              <!--
							<h2 class="heading animated bounceInDown">SIMCI 2017</h2>
							<p class="animated bounceInUp">Simposio Iberoamericano Multidisciplinario de Ciencias e Ingenierías</p>
							<a class="btn btn-default slider-btn animated fadeIn" href="#">Regístrate</a>
            -->
            </div>
          </div>
        </div>
        <div class="item" style="background-image: url(&quot;images/slider/slider2.jpg&quot;); height: 765px;">
          <div class="carousel-caption">
            <div>
              <h2 class="heading animated bounceInDown"><?php echo $slider02_text01; ?></h2>
              <!--
						<p class="animated bounceInUp">Everything is outstanding </p> <a class="btn btn-default slider-btn animated fadeIn" href="#">Get Started</a>
          -->
            </div>
          </div>
        </div>
        <div class="item" style="background-image: url(&quot;images/slider/slider1.jpg&quot;); height: 765px;">
          <div class="carousel-caption">
            <div>
              <h2 class="heading animated bounceInRight"><?php echo $slider01_text01; ?></h2>
              <p class="animated bounceInLeft"><?php echo $slider01_text02; ?></p>
              <!--
						<a class="btn btn-default slider-btn animated bounceInUp" href="#">Get Started</a>
          -->
            </div>
          </div>
        </div>
      </div>
      <!--/.carousel-inner-->
      <!--
		<a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		<a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
    -->


    </div>

  </section>
  <!--/#home-->






  <section id="programa" style="background-image: url(https://d2lm6fxwu08ot6.cloudfront.net/img-thumbs/960w/20KDRXQJNU.jpg); background-size: 100%;">

    <br />
    <iframe src="http://ericsimancas.com/rsimci2017/simci2017.php" width="100%" height="400"></iframe>
    <br />

    <div class="container">
      <div class="jumbotron" >
        <a id="download"></a>
        <h1>Publicación electrónica SIMCI</h1>
        <p>Descarga la versión digital del SIMPOSIO IBEROAMERICANO MULTIDISCIPLINARIO DE CIENCIAS E INGENIERÍAS  editada por la Universidad Politécnica de Pachuca</p>
        <br />
        <a class="btn btn-success" href="http://www.upp.edu.mx/simci/pdf/revista-SIMCI2017_ISSN.pdf" role="button">Edición 2017</a>
      </div>

      <br />

      <div class="jumbotron" >
        <h1>AGENDA SIMCI</h1>

        <p>Programa de actividades para el SIMCI</p>
        <br />
        <a class="btn btn-primary" href="./images/avisoagenda.jpeg" role="button">Miercoles</a>
        <a class="btn btn-primary" href="./pdf/jueves3.pdf" role="button">Jueves</a>
        <a class="btn btn-primary" href="./pdf/viernes2.pdf" role="button">Viernes</a>

      </div>

    </div>
  </section>







  <section id="about-us">
    <div class="container">
      <div class="text-center">
        <div class="col-sm-8 col-sm-offset-2">
          <!--<h2 class="title-one">¿Qué es el SIMCI?</h2>-->
          <h2 class="title-one"><?php echo $quees; ?></h2>

          <?php echo $quees_parrafo1; ?>


        </div>
      </div>
      <div class="about-us">
        <div class="row">
          <div class="col-sm-6">
            <h3>SIMCI</h3>
            <ul class="nav nav-tabs">
              <li class="active"><a href="#about" data-toggle="tab"><i class="fa fa-chain-broken"></i> <?php echo $objetivo; ?> </a></li>
              <li><a href="#mission" data-toggle="tab"><i class="fa fa-th-large"></i> <?php echo $dirijidoa; ?> </a></li>
              <li><a href="#community" data-toggle="tab"><i class="fa fa-users"></i> <?php echo $antecedentes; ?></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in active" id="about">
                <div class="media">
                  <!--
								<img class="pull-left media-object" src="HIMU%20-%20OnePage%20HTML%20Parallax%20template%20Archivos/about.jpg" alt="about us">
              -->
                  <div class="media-body">
                    <?php echo $objetivo_texto; ?>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="mission">
                <div class="media">
                  <!--
								<img class="pull-left media-object" src="HIMU%20-%20OnePage%20HTML%20Parallax%20template%20Archivos/mission.jpg" alt="Mission">
              -->
                  <div class="media-body">
                    <?php echo $dirijidoa_texto; ?>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="community">
                <div class="media">
                  <!--
								<img class="pull-left media-object" src="HIMU%20-%20OnePage%20HTML%20Parallax%20template%20Archivos/community.jpg" alt="Community">-->
                  <div class="media-body">

                    <?php echo $antecedentes_texto; ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">

            <img src="./images/publico.jpg" width="100%" />

            <br />
            <h2>
            <a href="./simci2015/index.html"><?php echo $liga_ver_anterior; ?></a>
          </h2>

          </div>
        </div>
      </div>
  </section>
  <!--/#about-us-->

  <section id="ejes" class="parallax-section">
    <div class="container">
      <div class="row text-center">
        <div class="col-sm-8 col-sm-offset-2">
          <h2 class="title-one"><?php echo $ejes_tematicos; ?></h2>
          <?php echo $ejes_tematicos_texto; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="our-service">
            <div class="services row">
              <div class="col-sm-4">
                <div class="single-service">
                  <i class="fa fa-heartbeat"></i>
                  <?php echo $eje1; ?>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="single-service">
                  <i class="fa fa-desktop"></i>
                  <?php echo $eje2; ?>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="single-service">
                  <i class="fa fa-grav"></i>
                  <?php echo $eje3; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/#service-->


  <!--COMITE ORGANIZADOR-->
  <section id="comiteorg">
    <div class="container">
      <div class="row text-center">
        <div class="col-sm-8 col-sm-offset-2">
          <h2 class="title-one"><?php  echo $comite;  ?></h2>
          <?php echo $comite_texto; ?>
        </div>
      </div>
      <div id="team-carousel" class="carousel slide" data-interval="false">
        <a class="member-left" href="#team-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="member-right" href="#team-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        <div class="carousel-inner team-members">

          <div class="row item active">
            <div class="col-sm-6 col-md-3">
              <div class="single-member">
                <img src="./images/macotela.jpg" alt="team member">
                <?php echo $comite_macotela; ?>
                <p>trejo_macotela@upp.edu.mx</p>
                <!--
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
                -->
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="single-member">
                <img src="./images/olmos.jpg" alt="team member">
                <?php echo $comite_olmos; ?>
                <p>elizabeth@upp.edu.mx</p>
                <!--
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
                -->
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="single-member">
                <img src="./images/simancas.jpg" alt="team member">
                <?php echo $comite_simancas; ?>
                <p>ericsimancas@upp.edu.mx</p>
                <!--
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i Portfolioclass="fa fa-linkedin"></i></a>
									</div>
                -->
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="single-member">
                <img src="./images/tellez.jpg" alt="team member">
                <?php echo $comite_tellez; ?>
                <p>alito@upp.edu.mx</p>
                <!--
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
                -->
              </div>
            </div>
          </div>

          <div class="row item">
            <div class="col-sm-6 col-md-3">
              <div class="single-member">
                <img src="./images/augusto.jpg" alt="team member">
                <?php echo $comite_augusto; ?>
                <p>augusto@upp.edu.mx</p>
                <!--
									<div class="socials">
										<a href="#"><i class="fa fa-                  		<tr>
                  			<td>
                  				<i class="fa fa-user-circle fa-5x" aria-hidden="true"></i>
                  			</td>
                  			<td>
                  				[CONTENT]
                  			</td>
                  		</tr>google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
                -->
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="single-member">
                <img src="./images/lizama.jpg" alt="team member">
                <?php echo $comite_lizama; ?>
                <p>luislizama@upp.edu.mx</p>
                <!--
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
                -->
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="single-member">
                <img src="./images/camarillo.jpg" alt="team member">
                <?php echo $comite_camarillo; ?>
                <p>danielrc@upp.edu.mx</p>
                <!--
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
                -->
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="single-member">
                <img src="./images/zamora.jpg" alt="team member">
                <?php echo $comite_zamora; ?>
                <p>luisalberto@upp.edu.mx</p>
                <!--
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
                -->
              </div>
            </div>





          </div>


          <div class="row item">
            <div class="col-sm-6 col-md-3">
              <div class="single-member">
                <img src="./images/irvin.jpg" alt="team member">
                <?php echo $comite_irvin; ?>
                <p>aimp@upp.edu.mx</p>
                <!--
                  <div class="socials">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                  </div>
                -->
              </div>
            </div>

            <div class="col-sm-6 col-md-3">
              <div class="single-member">
                <img src="./images/brenda.jpg" alt="team member">
                <?php echo $comite_brenda; ?>
                <p>brendaescorza@upp.edu.mx</p>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="single-member">
                <img src="./images/veronica.jpg" alt="team member">
                <?php echo $comite_veronica; ?>
                <p>veronicavazquez@upp.edu.mx</p>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="single-member">
                <img src="./images/brisene.jpg" alt="team member">
                <?php echo $comite_brisenno; ?>
                <p>brisenop@upp.edu.mx</p>
              </div>
            </div>



          </div>


        </div>
      </div>
    </div>
  </section>
  <!--/#Our-Team-->


<!-- POSTER -->
  <section id="poster">
    <div class="container">
      <div class="row text-center">
        <div class="col-sm-8 col-sm-offset-2">
          <h2 class="title-one"><?php echo $poster; ?></h2>
          <p>
            <a href="./images/<?php echo $poster_imagen; ?>"><img src="./images/<?php echo $postermini_imagen; ?>" /></a>
          </p>

        </div>
      </div>
    </div>
  </section>
<!-- FIN POSTER -->





<!-- PONENTES -->
<section id="ponentesX">
  <div class="container">
    <div class="text-center">
      <div class="col-sm-8 col-sm-offset-2">
        <h2 class="title-one"><?php echo $ponentes_titulo; ?></h2>
      </div>
    </div>

    <div class="about-us">
      <div class="row">
        <div class="col-md-12">

          <ul class="nav nav-pills nav-justified">
            <li class="active">
              <a href="#ponentesuno" data-toggle="tab">
                <i class="fa fa-heartbeat"></i> <?php echo $ponentesunoT; ?>
              </a>
            </li>
            <li>
              <a href="#ponentesdos" data-toggle="tab">
                <i class="fa fa-desktop"></i> <?php echo $ponentesdosT; ?>
              </a>
            </li>
            <li>
              <a href="#ponentestres" data-toggle="tab">
                <i class="fa fa-grav"></i> <?php echo $ponentestresT; ?>
              </a>
            </li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane fade in active" id="ponentesuno">
              <div class="media">
                <div class="media-body">


                  <table class="table table-bordered table-striped table-hover table-responsive">
                    <tbody>

                  <?php
                    $i = 0;
                    for ($fil = 1; $fil <= 90; $fil++)
                    {
                        if($arreglo[$fil][4]==1 && $arreglo[$fil][3]=="CBS")
                        {
                          echo "
                          <tr>
                            <td>
                              <img src=\"fotos-ponentes-simci/fotos".$fil.".jpg\" class=\"img-circle\" />
                            </td>
                            <td>
                              <strong>"; echo $fil." ".$arreglo[$fil][1]; echo "</strong><br />";
                              echo $arreglo[$fil][2];
                            echo "
                            </td>
                          </tr>
                          ";
                        }
                    }
                  ?>

                </tbody>
              </table>


                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="ponentesdos">
              <div class="media">
                <div class="media-body">

                  <table class="table table-bordered table-striped table-hover table-responsive">
                    <tbody>

                  <?php
                    $i = 0;
                    for ($fil = 1; $fil <= 100; $fil++)
                    {
                        if($arreglo[$fil][4]==1 && $arreglo[$fil][3]=="CCCF")
                        {
                          echo "
                          <tr>
                            <td>
                              <img src=\"fotos-ponentes-simci/fotos".$fil.".jpg\" class=\"img-circle\" />
                            </td>
                            <td>
                              <strong>"; echo $fil." ".$arreglo[$fil][1]; echo "</strong><br />";
                              echo $arreglo[$fil][2];
                            echo "
                            </td>
                          </tr>
                          ";
                        }
                    }
                  ?>

                </tbody>
              </table>

                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="ponentestres">
              <div class="media">
                <div class="media-body">


                  <table class="table table-bordered table-striped table-hover table-responsive">
                    <tbody>

                  <?php
                    $i = 0;
                    for ($fil = 1; $fil <= 100; $fil++)
                    {
                        if($arreglo[$fil][4]==1 && $arreglo[$fil][3]=="CI")
                        {
                          echo "
                          <tr>
                            <td>
                              <img src=\"fotos-ponentes-simci/fotos".$fil.".jpg\" class=\"img-circle\" />
                            </td>
                            <td>
                              <strong>"; echo $fil." ".$arreglo[$fil][1]; echo "</strong><br />";
                              echo $arreglo[$fil][2];
                            echo "
                            </td>
                          </tr>
                          ";
                        }
                    }
                  ?>

                </tbody>
              </table>


                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
</section>
<!-- FIN DE PONENTES -->





<!-- ENVIO DE TRABAJO -->
  <section id="trabajos">
    <div class="container">
      <div class="row text-center">
        <div class="col-sm-8 col-sm-offset-2">
          <h2 class="title-one"><?php echo $envio_de_trabajos; ?></h2>
          <h1><?php echo $extension_trabajos; ?></h1>
        </div>
      </div>
      <div class="row ">
        <div class="col-sm-8 col-sm-offset-2">
          <?php echo $envio_de_trabajos_texto; ?>
          <?php echo $aceptacion; ?>
          <?php echo $aceptacionrevistas; ?>
          <img src="./images/conacyt-reniecyt.jpg" /><br />
        </div>
      </div>
    </div>
  </section>
<!-- FIN DE ENVIO DE TRABAJOS -->



<!-- Revistas -->
<section id="revistas">
  <div class="container">
    <div class="row text-center">
      <div class="col-sm-8 col-sm-offset-2">
        <h2 class="title-one">Revistas</h2>
        <p>
          Revitas arbitradas
        </p>

      </div>
    </div>
    <div id="revistas-carousel" class="carousel slide" data-interval="false">

      <a class="member-left" href="#revistas-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="member-right" href="#revistas-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

      <div class="carousel-inner ">
        <div class="row item active">
          <div class="col-sm-6 col-md-3">
            <div>
              <img src="./images/rev/01.jpg" alt="revista">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div>
              <img src="./images/rev/02.jpg" alt="revista">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div>
              <img src="./images/rev/03.jpg" alt="revista">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div>
              <img src="./images/rev/04.jpg" alt="revista">
            </div>
          </div>
        </div>


        <div class="row item">
          <div class="col-sm-6 col-md-3">
            <div>
              <img src="./images/rev/05.jpg" alt="revista">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div>
              <img src="./images/rev/06.jpg" alt="revista">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div>
              <img src="./images/rev/07.jpg" alt="revista">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div>
              <img src="./images/rev/08.jpg" alt="revista">
            </div>
          </div>
        </div>


        <div class="row item">
          <div class="col-sm-6 col-md-3">
            <div>
              <img src="./images/rev/09.jpg" alt="revista">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div>
              <img src="./images/rev/10.jpg" alt="revista">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div>
              <img src="./images/rev/11.jpg" alt="revista">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div>
              <img src="./images/rev/12.jpg" alt="revista">
            </div>
          </div>
        </div>


        <div class="row item">
          <div class="col-sm-6 col-md-3">
            <div>
              <img src="./images/rev/13.jpg" alt="revista">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div>
              <img src="./images/rev/14-3.jpg" alt="revista">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div>
              <img src="./images/rev/15.jpg" alt="revista">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div>
              <img src="./images/rev/16-2.jpg" alt="revista">
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- Revistas -->





  <section id="costos">
    <div class="container">
      <div class="row text-center">
        <div class="col-sm-8 col-sm-offset-2">
          <h2 class="title-one"><?php echo $costos; ?></h2>
        </div>
      </div>
      <div class="row ">
        <div class="col-sm-4 col-sm-offset-2">
          <?php echo $costos1; ?>
        </div>
        <div class="col-sm-4 col-sm-offset-2">
          <?php echo $costos2; ?>
        </div>
        <div class="col-sm-8 col-sm-offset-2">
          <?php echo $costos3; ?>

          <p>Los datos bancarios para realizar el depósito o transferencia son:<br />
           <br />
          No. cuenta: 0322982035<br />
          Clabe: 072 290 00322982035 6<br />
          Institución bancaria: Banorte <br />
          A nombre de Universidad Politécnica de Pachuca<br />
           <br />
          En caso de requerir factura favor de solicitarlo al momento de enviar su comprobante de pago a los correos:  simci@upp.edu.mx  y  brisenop@upp.edu.mx
        </p>

        </div>
      </div>
    </div>
  </section>


  <section id="registro" style="background-image: url(https://d2lm6fxwu08ot6.cloudfront.net/img-thumbs/960w/8DNUWZ2MEN.jpg); background-size: 100%;">
    <div class="container">

      <div class="jumbotron" >
        <h1>Registro al SIMCI</h1>

        <p>Ven, forma parte de este gran evento registrate ahora</p>
        <br />
        <a class="btn btn-primary" href="http://simci.mx" role="button">Registro</a>

      </div>

      <br />

      <div class="jumbotron" >
        <h1>Registro a los talleres del SIMCI</h1>

        <p>Convive, participa, investiga.</p>
        <br />
        <a class="btn btn-success" href="./regtalleres/index.html" role="button">Registro</a>

      </div>


    </div>
  </section>




  <!-- SEDE -->
  <section id="clients" class="parallax-section">
    <div class="container">
      <div class="clients-wrapper">

        <div class="row text-center">
          <div class="col-sm-8 col-sm-offset-2">
            <h2 class="title-one"><?php echo $sedetitulo; ?></h2>
            <h3><?php echo $sede_nombre; ?></h3>
            <?php echo $sede_texto; ?>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4455.85943397654!2d-98.77354429304084!3d20.0957885630019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1a09669bddce9%3A0x30b2509e2a617213!2sCentro+de+Convenciones+TuzoForum!5e0!3m2!1ses-419!2smx!4v1494803060239"
              width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--/#SEDE-->


  <section id="blog">
    <div class="container">
      <div class="row text-center clearfix">
        <div class="col-sm-8 col-sm-offset-2">
          <h2 class="title-one"><?php echo $patrocinadores; ?></h2>
          <?php echo $patrocinadores_texto; ?>
          <br />
          <a href="http://www.iortopedia.com.mx/"><img src="./images/patrocinadores/iortopedia_logo_web-1.png" /></a>
          <a href="http://tecno-shop.com.mx/"><img src="./images/patrocinadores/logo-kitmex.png" /></a>
          <a href="http://tecno-shop.com.mx/"><img src="./images/patrocinadores/Logo-tecnoshop.jpg" /></a>
          <a href="http://www.multitects.com.mx/home/"><img src="./images/patrocinadores/multitec.jpg" /></a>
          <a href="http://www.droneproject.org/"><img src="./images/patrocinadores/droneproject.png" /></a>
          <a href="http://www.facebook.com/proelmovil"><img src="./images/patrocinadores/logo-proel.png" /></a>
          <a href="http://www.totalplay.com"><img src="./images/patrocinadores/logo-totalplay.png" /></a>
          <a href="http://www.multion.com"><img src="./images/patrocinadores/logo-multion.png" /></a>
          <a href="http://grupossc.com/index.php"><img src="./images/patrocinadores/logo-grupossc.jpg" /></a>
          <a href="http://www.huitzilin.com.mx"><img src="./images/patrocinadores/logo-huitzilin.png" /></a>
          <a href="#"><img src="./images/patrocinadores/Artecnica.png" /></a>
          <a href="#"><img src="./images/patrocinadores/EraKreativa.png" /></a>
          <a href="#"><img src="./images/patrocinadores/Fluke.png" /></a>
          <a href="#"><img src="./images/patrocinadores/Raysafe.png" /></a>
          <a href="#"><img src="./images/patrocinadores/Robodacta5.png" /></a>
          <a href="#"><img src="./images/patrocinadores/obsupp.png" /></a>
        </div>
      </div>
    </div>
  </section>
  <!--/#blog-->

  <!-- HOSPEDAJE -->
  <section id="hospedaje" class="parallax-section">
    <div class="container">
      <div class="clients-wrapper">

        <div class="row text-center">
          <div class="col-md-12 ">
            <br />
            <a href="./images/Holiday-inn-SIMCI2017.jpg">
              <img src="images/Holiday-inn-express.jpg" width="300" />
            </a>
            <br />
            <br />
            <br />
            <a href="./pdf/Flyer-SIMCI-GMPAC.pdf">
              <img src="images/Gamma-Fiesta-Inn-SIMCI2017.jpg" width="300"    />
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--/#HOSPEDAJE-->



  <section id="id_fullprof">
    <div class="container">
      <div class="row text-center clearfix">
        <div class="col-sm-8 col-sm-offset-2">
          <h2 class="title-one">FullProf Suite</h2>
          <img src="./images/fullprof-logo.gif" class="img-responsive" />
          <h3>1ª Escuela FullProf México </h3>
          <h4>Por Juan Rodríguez Carvajal</h4>
          <h4>Del 17 al 22 de septiembre del 2017</h4>

          <p><a href="http://www.researcherid.com/ProfileView.action?returnCode=ROUTER.Success&Init=Yes&SrcApp=CR&queryString=KG0UuZjN5WnCvwh8FIuxUjRwIMVe1jd187IkprZifws%253D&SID=1CZ5JDcewuESFixFlwT">PONENTE Research ID</a></p>
          <p><a href="https://www.ill.eu/fileadmin/users_files/media/groups/DIF/img/people/carvajal/CVsummary-JRC.pdf">PONENTE CV summary</a></p>
          <ul>
            <li><a href="./pdf/TEMARIO-FULLPROF.pdf">Programa</a></li>
            <li><a href="./pdf/COSTOS-Y-HOSPEDAJE.pdf">Costos y hospedaje</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>



  <section id="contact">
    <div class="container">
      <div class="row text-center clearfix">
        <div class="col-sm-8 col-sm-offset-2">
          <div class="contact-heading">
            <h2 class="title-one"><?php echo $contacto; ?></h2>
            <?php echo $contacto_texto; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <!-- container -->
      <div class="contact-details">
        <!-- contact details -->
        <div class="pattern"></div>
        <div class="row text-center clearfix">
          <!-- row text-->
          <div class="col-sm-6">
            <!-- col6 -->
            <div class="contact-address">
              <!-- contact address -->
              <address><p><span>SIMCI</span>2017</p><strong><?php echo $sede_nombre; ?></strong><br />
                <small>( Parque David Ben Gurión, Zona Plateada, Pachuca de Soto, Hgo. C.P. 42084. )</small></address>
              <div class="social-icons">
                <!-- icons -->
                <a href="https://www.facebook.com/simciupp/"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/simciupp"><i class="fa fa-twitter"></i></a>
              </div>
              <!-- icons -->
            </div>
            <!--contact address -->
          </div>
          <!-- col6 -->

          <div class="col-sm-6">
            <!-- col6 -->
            <div class="contact-address">
              <!-- contact address -->

              <p>
                <?php echo $escribanos; ?>
              </p>

              <p><span>simci@upp.edu.mx</span></p>

            </div>
            <!--contact address -->
          </div>
          <!-- col6 -->




        </div>
        <!-- row text-->
      </div>
      <!-- contact details -->
    </div>
    <!-- container -->


  </section>
  <!--/#contact-->

  <footer id="footer">
    <div class="container">
      <div class="text-center">
        <p>Copyright © 2017 - <a href="http://www.upp.edu.mx/">Universidad Politécnica de Pachuca</a> | <a href="http://site.upp.edu.mx/front/?page_id=28"><?php echo $webmaster; ?> </a> ver 2.6 </p>
      </div>
    </div>
  </footer>
  <!--/#footer-->

  <script type="text/javascript" src="./imu/jquery_004.js"></script>
  <script type="text/javascript" src="./bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="./imu/smoothscroll.js"></script>
  <script type="text/javascript" src="./imu/jquery_002.js"></script>
  <script type="text/javascript" src="./jquery/jquery-3.2.1.js"></script>
  <script type="text/javascript" src="./imu/jquery_003.js"></script>
  <script type="text/javascript" src="./imu/main.js"></script>

</body>

</html>
