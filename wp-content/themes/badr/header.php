<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Badr Interactive
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Website Badr Interactive">
	<meta name="author" content="Badr Interactive">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" />
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- fullpage -->
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/jquery.fullPage.css" />
    <!-- Custom CSS -->
    <link href="<?php echo bloginfo('template_directory'); ?>/css/agency.css" rel="stylesheet">
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.8/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.8/slick-theme.css"/>
    <!-- hover -->
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/hover.min.css">
    <!-- Slider -->
    <link href="<?php echo bloginfo('template_directory'); ?>/css/nouislider.min.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory'); ?>/css/nouislider.pips.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Hind' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <!--<script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
        //<script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/jquery-ui.min.js"></script>-->
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
        <!-- Smooth Scroll -->
        <script src="<?php echo bloginfo('template_directory'); ?>/js/smooth-scroll.js"></script>
        <!-- Slick -->
        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.8/slick.min.js"></script>
        <!-- Slider -->
        <script src="<?php echo bloginfo('template_directory'); ?>/js/nouislider.min.js"></script>
        <!-- fullpage -->
        <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/jquery.fullPage.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="<?php echo bloginfo('template_directory'); ?>/js/agency.js"></script>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <!-- gravity form ajax required -->
        <?php gravity_form_enqueue_scripts(1, true); ?>
        <?php gravity_form_enqueue_scripts(3, true); ?>
        <?php gravity_form_enqueue_scripts(5, true); ?>
        <?php wp_head(); ?>
    </head>

    <body id="page-top" class="index">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=1623311071261093";
          fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
      <!-- Navigation -->
      <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
           <!-- Brand and toggle get grouped for better mobile display -->
           <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand page-scroll" href="<?php echo get_site_url() ?>">
            <img class="hvr-grow" style="max-width:120px;" src="<?php echo bloginfo('template_directory'); ?>/img/header/logo-badr.png">
        </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <nav id="site-navigation" class="main-navigation" role="navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'badr' ); ?></button>
    </nav><!-- #site-navigation -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-mid">
           <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false , 'items_wrap' => '%3$s') ); ?>    					
       </ul>

       <ul class="nav navbar-nav navbar-right">
        <a href="<?php echo get_site_url() ?>/index.php/contact"><button type="button" class="btn btn-menu-contact navbar-btn">CONTACT</button></a>
    </ul>
</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.container-fluid -->
</nav>
