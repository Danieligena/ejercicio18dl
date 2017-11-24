<?php 
	
	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* ---- Registrar estilos ---- */
		//main es el nombre de la función que nosotros asignamos
		//get_parent_theme_file_uri va la dirección de nuestro css
		//en array se pone si se necesita otro elemento para que funcione el css array(), pero como no dependemos, se pone null
		//en theme data ponemos la versión de nuestro css, en este caso un 1.0 ya que se creó recién

		wp_register_style('bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', null, $theme_data->get('3.3.7'));
		wp_register_style('main', get_parent_theme_file_uri('/css/main.css'), null, $theme_data->get('1.0'));

		/* llamar estilos */
		//acá llamamos al estilo que registramos antes

		wp_enqueue_style( 'bootstrap_css' );
		wp_enqueue_style( 'main' );
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );

	/* Registrar JS */

	function dl_enqueue_scripts() {

	/* Registrar Scripts */

	wp_register_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true);
	wp_register_script('scripts', get_parent_theme_file_uri('/js/script.js'), /*array() si dependo de otro script, podría ser jquery*/null, '1.0', true); /*true= footer - false= header*/

	/* Enqueue Scripts */
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap_js');
	wp_enqueue_script('scripts');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );

 ?>