<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>
<body>
    <?php
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
    <!-- Nav Bar -->

    <nav class="navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="<?php echo $logo[0]; ?>" alt="Logo_Il" class="navbar__logo">
                </a>
            </div>
            <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
            	<?php wp_nav_menu( array(
            		'theme_location' 	=> 'header-menu',
            		'container_id'		=> 'navbarResponsive',
            		'container_class' 	=> 'collapse navbar-collapse',
            		'menu_class'     	=> 'navbar-nav ml-auto'
            		)
            	); ?>
            <?php } ?>


        </div><!-- /.container-fluid -->
    </nav>
