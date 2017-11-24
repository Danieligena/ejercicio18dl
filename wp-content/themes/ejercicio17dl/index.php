<?php get_header(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Desafío Latam - Ejercicio 17</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-1 title">
					<h1>COMIENZA UNA NUEVA VIDA Y ÚNETE AL MUNDO TECNOLÓGICO</h1>
					<button type="button" class="btn btn-primary">Comienza Acá!</button>
					<button type="button" class="btn btn-success">Más Info</button>
					<p>Hay una escasez gigante de desarrolladores en el mundo y más aún en Latinoamérica, se necesitan más desarrolladores y Tú puedes ser uno!</p>
				</div>
			</div>
		</div>
	</header>
	<!-- Slider -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active bg1">
	    </div>

	    <div class="item bg2">
	    </div>

	    <div class="item bg3">
	    </div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<!-- Info 1 -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2 info1">
				<h3>EL BOOTCAMP DE PROGRAMACIÓN MÁS GRANDE DE LATINOAMÉRICA</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
				<img class="img-responsive center-block" src="<?php bloginfo('template_url') ?>/images/viewing-gallery-for-happy-people.png">
			</div>
		</div>
	</div>
	<div class="border_top"></div>
	<!-- Info 2 -->
	<div class="container-fluid info2">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2 info1">
				<h3>SOLICITA INFORMACIÓN E INSCRÍBETE</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
				<button type="button" class="btn btn-primary">Inscríbete!</button>
				<h4>Vive la experiencia Desafío Latam!</h4>
			</div>
		</div>
	</div>
	<div class="border_top"></div>
	<!-- Contact -->
	<div class="container contact">
		<div class="row">
			<div class="col-xs-12 col-sm-6 contact_info">
				<h4>Contacto</h4>
				<p><b>Desafío Latam</b><br>
				Ezequías Alliende 2361<br>
				P: +56 9 5117 7975</p>
				<a href="mailto:inscripciones@desafiolatam.com">inscripciones@desafiolatam.com</a>
			</div>
			<div class="col-xs-12 col-sm-6 contact_form">
				<h4>Suscríbete</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<input type="text" name="mail" placeholder="Ingresa tu Email">
				<button type='submit'>Enviar</button>
			</div>
		</div>
	</div>
</body>
</html>

<!-- <?php if ( have_posts() ) { 
the_post(); ?>

	<?php the_title(); ?>
	<?php the_content() ?>

	<?php }; ?>

	<?php get_footer(); ?> -->