<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>	
	<?php 
		$menu = get_post_meta($post->ID);
		$location = '';
		
		foreach ($menu as $key => $value):
			$item = $item;
			if($key == 'menu' || $key == 'catering_menu'){
				$location = $value[0];	
			}
		endforeach;
		
		if(strlen($location) > 0) header('Location: '.$location);
	?>
	<div class="content clearfix">
		<?php the_content(); ?>
	</div><!-- .content -->

<?php endwhile; endif; ?>