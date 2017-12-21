<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset=  <?php bloginfo( 'charset' ); ?>>
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="<?php echo cs_get_option('website_favicon'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, minimum-scale=1">
    <meta name="description" content="<?php bloginfo( 'name' ); ?>">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head();?>
    <title><?php bloginfo( 'name' );?></title>

    <style type="text/css" media="screen">
        h1 > a{
            color: <?php echo cs_get_option('color_primary'); ?> !important;
        }
        span > a{
            color: <?php echo cs_get_option('color_brilloso'); ?> !important;
        }
        hr{
            height: 10px;
        }
        a:hover, a:focus {
            color: <?php echo cs_get_option('color_secundary'); ?>;  !important;
        }
        .pointer{
            cursor: pointer !important;
        }
        .fts-jal-single-fb-post a{
            color: <?php echo cs_get_option('color_primary'); ?> !important;
        }
    	.bg-ieee{
    		background-color: <?php echo cs_get_option('color_primary'); ?> !important;
    	}
    	.btn-ieee{
    		background-color: <?php echo cs_get_option('color_primary'); ?>;
    		color: #FFFFFF;
    	}
    	.text-ieee{
    		color:  <?php echo cs_get_option('color_primary'); ?> !important;
    	}
        .separator-ieee{
            background-color:  <?php echo cs_get_option('color_primary'); ?>;
        }
        .blockquote-ieee{
            border-color:  <?php echo cs_get_option('color_primary'); ?>;
            color:  <?php echo cs_get_option('color_primary'); ?>;
        }
        .blockquote.blockquote-ieee small {
            color: <?php echo cs_get_option('color_primary'); ?>
        }
        p > a {
            color:  <?php echo cs_get_option('color_secundary'); ?>;  !important;
        }
        .form-control:focus{
            border: 1px solid  <?php echo cs_get_option('color_primary'); ?>;
        }
        .input-group-focus .input-group-addon{
            border-color:  <?php echo cs_get_option('color_primary'); ?>;
        }
        .card-title > a {
            color: <?php echo cs_get_option('color_brilloso'); ?> !important;
        }
        .text-ieee > a{
            color:  <?php echo cs_get_option('color_primary'); ?> !important;
        }
        .projects-5 .info {
            padding: 0;
        }
        .info {
            max-width: 360px;
            margin: 0 auto;
            text-align: center;
        }
        .info-horizontal .icon>i {
            font-size: 2em;
        }
        .info-horizontal .icon {
            float: left;
            margin-top: 23px;
            margin-right: 10px;
        }
        .info .icon {
            transition: transform .4s, box-shadow .4s;
        }
        .icon.icon-ieee {
             color: #888888; 
        }
        .info-horizontal {
            text-align: left !important;
        }
        .description, .card-description{
            color: #9A9A9A;
            font-weight: 300;
        }
        .info-horizontal .description {
            overflow: hidden;
        }
        .info .info-title {
            margin: 25px 0 15px;
            padding: 0 15px;
            color: #2c2c2c;
        }
        .projects-5 .info p {
            margin: 0;
        }
        .info-horizontal .description {
            overflow: hidden;
        }
        .info p {
            color: #888888;
            padding: 0 15px;
            font-size: 1.1em;
        }
        .projects-5 .card-background {
            margin-bottom: 0;
        }
        .card-background {
            background-position: center center;
            background-size: cover;
            text-align: center;
        }
        .card-raised {
            box-shadow: 0px 20px 50px 0px rgba(0, 0, 0, 0.3);
        }
        .projects-5 .card-background .card-body {
            padding-top: 140px;
            padding-bottom: 140px;
        }
        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
        }
        .card-background .card-body {
            position: relative;
            z-index: 2;
            min-height: 400px;
            margin: 0 auto;
            padding-top: 60px;
            padding-bottom: 60px;
        }
        .card-background.card-background-product .card-body .card-title {
            margin-top: 30px;
        }
        .card-background .card-title {
            color: #FFFFFF;
            margin-top: 130px;
        }
        .card-background:after {
            position: absolute;
            z-index: 1;
            width: 100%;
            height: 100%;
            display: block;
            left: 0;
            top: 0;
            content: "";
            background-color: rgba(0, 0, 0, 0.63);
            border-radius: 0.25rem;
        }
        .fts-powered-by-text-popup a.fts-powered-by-text {
            display: none!important;
        }
        .fts-jal-fb-header {
            display: none !important;
        }
        .rounded{
            color:  <?php echo cs_get_option('color_primary'); ?>;
            font-size: 25px;
        }
    </style>
</head>

<body class="landing-page sidebar-collapse">

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg bg-ieee fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
        	<div class="dropdown button-dropdown">
                <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
				  $menu_name = 'Opciones'; // this is the registered menu name
				  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) :
				    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
				    $menu_items = wp_get_nav_menu_items($menu->term_id);
				    foreach ( (array) $menu_items as $key => $menu_item ) :
			        $title = $menu_item->title;
			        $url = $menu_item->url;
			        $class = $menu_item->classes; // get array with class names
			        echo '<a class="dropdown-item" href="' . $url . '">'.$title.'</a>';
		      	endforeach;
		      	endif;
		      	?>
				</div>
            </div>
            <div class="navbar-translate">
                <a class="navbar-brand" href="<?php echo home_url('/'); ?>" rel="tooltip" title="<?php bloginfo('description'); ?>" data-placement="bottom">
                    <?php bloginfo('name'); ?>
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <!--menu principal-->
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="<?php bloginfo('stylesheet_directory');?>/assets/img/blurred-image-1.jpg">
                <?php
				  $menu_name = 'Principal'; // this is the registered menu name
				  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) :
				    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
				    $menu_items = wp_get_nav_menu_items($menu->term_id);
				    echo "<ul class='navbar-nav'>";
				    foreach ( (array) $menu_items as $key => $menu_item ) :
			        	$title = $menu_item->title;
			        	$url = $menu_item->url;
			        	$class = $menu_item->classes; // get array with class names
			        	if ( get_the_ID() == $menu_item->object_id ) { // check for current page
			          		echo '<li class="nav-item"><a class="nav-link active" href="' . $url . '">';
			        	} else {
			          		echo '<li class="nav-item"><a class="nav-link" href="' . $url . '">';
			        	}
			          		echo '<i class="item ' . implode(' ', $class) . '"></i>' . $title;
		          	echo '</a></li>';
		      	endforeach;
		      	?> 
		      	<li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Síguenos en Facebook" data-placement="bottom" href="<?php echo cs_get_option( 'url_fb' );?>" target="_blank">
                        <i class="fa fa-facebook-square"></i>
                        <p class="d-lg-none d-xl-none">Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Síguenos en Twitter" data-placement="bottom" href="<?php echo cs_get_option( 'url_tw' );?>" target="_blank">
                        <i class="fa fa-twitter"></i>
                        <p class="d-lg-none d-xl-none">Twitter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Síguenos en Instagram" data-placement="bottom" href="<?php echo cs_get_option( 'url_inst' );?>" target="_blank">
                        <i class="fa fa-instagram"></i>
                        <p class="d-lg-none d-xl-none">Instagram</p>
                    </a>
                </li>
		      	<?php echo "</ul>";
		      	endif;
		      	?>
            </div>
		</div>
	</nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header page-header-small">
            <div class="page-header-image" data-parallax="true" style="background-image: url('<?php echo cs_get_option( 'image_slide' );?>');">
            </div>
            <div class="container">
                <div class="content-center">
                    <h1 class="title"><?php echo cs_get_option( 'title_slide' );?></h1>
                    <p class="description"><?php echo cs_get_option( 'description_slide' );?></p>
                    <div class="text-center">
                        <a target="_blank" href="<?php echo cs_get_option( 'url_fb' );?>" class="btn btn-ieee btn-icon btn-round">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                        <a target="_blank" href="<?php echo cs_get_option( 'url_tw' );?>" class="btn btn-ieee btn-icon btn-round">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a target="_blank" href="<?php echo cs_get_option( 'url_inst' );?>" class="btn btn-ieee btn-icon btn-round">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>