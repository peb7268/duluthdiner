<?php 
	/*
	* Template Name: Training
	*/
	get_header(); 
?>
<div id="wrapper-page">
	<div id="body">
		<?php if(! is_page(457)){ ?>
		<div id="single-header">
			<div class="left">
				<h1 id="title"><?php the_title(); ?></h1>
				<span>+</span>
			</div>
			<div class="right">
				<?php if ( has_post_thumbnail() ) { 
					the_post_thumbnail();
				} else { 
					?>
					<img src="<?php echo get_template_directory_uri() ?>/img/pages/header-default.png" alt="path testing">
				<?php } ?>
			</div><!-- .right -->
		</div><!-- #singel-header -->
		
		<?php } else { ?>
			<h1 id="title"><?php the_title(); ?></h1>
		<?php } ?>
		<?php require 'framework/loops/logged-in-training.php'; ?>
	</div><!-- #body -->
</div><!-- #wrapper-single -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>