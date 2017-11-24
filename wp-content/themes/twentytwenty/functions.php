<?php 
	
	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* ---- Registrar estilos ---- */
		//main es el nombre de la función que nosotros asignamos
		//get_parent_theme_file_uri va la dirección de nuestro css
		//en array se pone si se necesita otro elemento para que funcione el css array(), pero como no dependemos, se pone null
		//en theme data ponemos la versión de nuestro css, en este caso un 1.0 ya que se creó recién

		wp_register_style('twtw', get_parent_theme_file_uri('/css/twentytwenty.css'), null, $theme_data->get('Version'));

		/* llamar estilos */
		//acá llamamos al estilo que registramos antes

		wp_enqueue_style( 'twtw' );
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );

	/* Registrar JS */

	function dl_enqueue_scripts() {

	/* Registrar Scripts */

	wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js',null, 'Version', true);
	wp_register_script('twjqmove', get_parent_theme_file_uri('/js/jquery.event.move.js'),null, 'Version', true);
	wp_register_script('twjquery', get_parent_theme_file_uri('/js/jquery.twentytwenty.js'),null, 'Version', true);

	/* Enqueue Scripts */
	wp_enqueue_script('jquery');
	wp_enqueue_script('twjqmove');
	wp_enqueue_script('twjquery');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
 ?>