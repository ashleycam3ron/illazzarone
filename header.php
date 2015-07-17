<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#000">
    <meta name="dc.language" CONTENT="US">
	<meta name="dc.source" CONTENT="http://www.illazzarone.org/">
	<meta name="dc.title" CONTENT="<?php bloginfo('name');?>">
	<meta name="dc.keywords" CONTENT="Neapolitan Pizza">
	<meta name="dc.subject" CONTENT="<?php bloginfo('name');?>">
	<meta name="dc.description" CONTENT="<?php bloginfo('description');?>">
	<meta name="dc.creator" content="Ashley Cameron">
	<title><?php echo wp_title();?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/favicon.ico" />
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicon-192.png">
    <link rel="image_src" href="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" />
    <script src="//use.typekit.net/lvz3uwx.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="header" role="banner">
<!--  <form id="searchform" class="navbar-form navbar-right" role="search" action="<?php echo home_url( '/' ); ?>">
			  <div class="form-group">
			    <input type="text" id="s" class="form-control" placeholder="Search">
			  </div>
			  <button type="submit" id="searchsubmit" class="btn btn-default">Submit</button>
		  </form> -->

	<a class="navbar-brand" href="<?php echo esc_url( home_url() ) ?>"><h1><?php bloginfo('name')?></h1></a>
	<nav class="navbar navbar-default" role="navigation">
		<h2>Primary Navigation</h2>
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			  <span class="sr-only">Toggle navigation</span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse navbar-ex1-collapse">
		<?php wp_nav_menu( array(
			  'menu' => 'primary',
			  'depth' => 2,
			  'container' => false,
			  'menu_class' => 'nav navbar-nav sticky',
			  'walker' => new wp_bootstrap_navwalker())
			); ?>
		</div>
	</nav>
</header>

<div class="bk hidden-xs"></div>