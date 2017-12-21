<?php

	//framework de opciones
	require_once dirname( __FILE__ ) .'/cs-framework/cs-framework.php';

	// Registro del menú de WordPress
	register_nav_menus(
		array(
			'Opciones'		=>		'Menú Opciones', 
			'Principal'		=>		'Menú Principal',
			'Footer'		=>		'Menú Footer',
	));

	// Right sidebar
	function sidebar_widgets() {
		register_sidebar( array(
			'name'          => 'Right sidebar',
			'id'            => 'home_right',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="rounded">',
			'after_title'   => '</h2>',
		) );
	}

	add_action( 'widgets_init', 'sidebar_widgets' );


    //añadiendo soporte a imagenes miniaturas en posts
    add_theme_support('post-thumbnails');
	set_post_thumbnail_size(225, 150, true);

	//modificar el extracto
	function extracto_leermas() {
		global $post;
		return '<a href="'. get_permalink($post->ID) . '" > Leer más</a>';
	}
	add_filter('excerpt_more', 'extracto_leermas');

	//modificar contact form 7
	
	add_filter('wpcf7_form_elements', function($content) {
	    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

	    return $content;
	});

	//importar recursos
	function resources() {
		wp_enqueue_script( 'jQuery', get_template_directory_uri().'/assets/js/core/jquery.3.2.1.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'Popper', get_template_directory_uri().'/assets/js/core/popper.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'Bootstrap', get_template_directory_uri().'/assets/js/core/bootstrap.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'BootstrapSwitch', get_template_directory_uri().'/assets/js/plugins/bootstrap-switch.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'Nouislider', get_template_directory_uri().'/assets/js/plugins/nouislider.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'Datepicker', get_template_directory_uri().'/assets/js/plugins/bootstrap-datepicker.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'Main', get_template_directory_uri().'/assets/js/now-ui-kit.js', array( 'jquery' ), '1.1.0', true );

		wp_enqueue_style("BootstrapStyle", get_template_directory_uri().'/assets/css/bootstrap.min.css');
		wp_enqueue_style("style", get_stylesheet_uri());
		wp_enqueue_style("FontAwesome", 'https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css');
	}

	add_action( 'wp_enqueue_scripts', 'resources' );

?>