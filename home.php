<?php
/*
* Template Name: Home
*/
	$img_dir = get_bloginfo('stylesheet_directory')."/img/";
	get_header(); 
?>
	
	<?php require_once 'framework/elements/slideshow.php'; ?>

<div id="wrapper-home" class="clearfix">
	<ul id="product-info" class="clearfix">
		<?php require_once 'framework/loops/home_page_ctas.php'; ?>
		<li>
			<h4 class="news">Recent News</h4>
			<ul id="news_posts">
				<?php require_once 'framework/loops/recent_news.php'; ?>
			</ul>
		</li>
	</ul>
</div><!-- #wrapper -->

<?php get_footer(); ?>