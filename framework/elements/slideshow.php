<section id="hero" class="clearfix">
	<div id="slider" class="nivoSlider">
		<div id="ssw">
		<?php
			query_posts( 'category_name=Slider' );
			if( have_posts() ): while( have_posts() ): the_post(); ?>
			<?php 
				get_the_post_thumbnail($id);
			?>
			<a href="<?php the_permalink(); ?>"><?php echo getImgSrc(); ?></a>
		<?php endwhile; endif; wp_reset_query(); ?>
	</div><!-- #ssw -->
		</div><!-- #slider -->
</section><!-- #hero -->