<?php 
/*
* Template Name: Full width page
*
*
*/
get_header(); 
?>
<div id="wrapper-fullwidthpage">
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
		
		<?php require 'framework/loops/generic.php'; ?>
	</div><!-- #body -->
</div><!-- #wrapper-single -->
<?php get_footer(); ?>