<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_2_Wordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon.ico">
  <!-- BOOTSTRAP CSS -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">
  <!-- FONT-AWESOME ICONS -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">

	<?php wp_head(); ?>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body <?php body_class(); ?> id="top">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>

	<!-- HEADER -->
  <header class="site-header" role="banner">

    <!-- NAVBAR -->
    <div class="navbar-wrapper">
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="">
            </a>
          </div>

					<div class="collapse navbar-collapse" id="bs-navbar-collapse">

					<?php
						wp_nav_menu( array(
							'theme_location'		=>		'primary',
							'container'					=>		'ul',
							'menu_class'				=>		'nav navbar-nav navbar-right'
						));
					?>
					</div>

        </div>
      </nav>
    </div>

  </header>

	<div id="content" class="site-content">
