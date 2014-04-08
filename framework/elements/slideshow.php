<section id="hero" class="clearfix">
	<div id="slider" class="nivoSlider">
		<div id="ssw">
		<?php
			query_posts( 'category_name=Slider' );
			if( have_posts() ): while( have_posts() ): the_post(); ?>
			<?php
				get_the_post_thumbnail($id);
			?>
			<a href="<?php the_permalink(); ?>">
				<div id="ad">
					<?php
						$meta = get_post_meta($id);
					?>
	<?php if(array_key_exists('ad_1', $meta)){ ?><h2 id="ad_1"><?php echo $meta['ad_1'][0]; ?></h2><?php } ?>
	<?php if(array_key_exists('ad_2', $meta)){ ?><h2 id="ad_2"><?php echo $meta['ad_2'][0]; ?></h2><?php } ?>
				</div>
				<?php echo getImgSrc(); ?>
			</a>
		<?php endwhile; endif; wp_reset_query(); ?>
	</div><!-- #ssw -->
		</div><!-- #slider -->
</section><!-- #hero -->