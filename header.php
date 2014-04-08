<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="ie6"> <![endif]-->
<!--[if IE 7]>         <html class="ie7"> <![endif]-->
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html>         <!--<![endif]-->

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width" />
	<title>Page Title</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700|Anton|Diplomata+SC' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8">
	<!--[if lt IE 9]>
	   <script>
	      document.createElement('header');
	      document.createElement('nav');
	      document.createElement('section');
	      document.createElement('article');
	      document.createElement('aside');
	      document.createElement('footer');
	   </script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<div id="wrapper" class="clearfix">
	<?php require_once 'searchform.php'; ?>
	<header class="clearfix">
		<div id="logo">
			<a href="<?php echo home_url(); ?>">
				<h1>Duluth Diner</h1>
			</a>
		</div><!-- #logo -->
		<div class="navigation clearfix">
			<a href="#">≡ </a>
			<span>Navigation</span>
		</div><!-- .navigation -->
		<?php
			wp_nav_menu( array(
				'theme_location'  	=> 'Primary',
				'container_id' 		=> 'navigation'
				)
			);
		?>
	</header>