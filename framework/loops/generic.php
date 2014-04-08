<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>	

	<div class="content clearfix">
		<?php the_content(); ?>
	</div><!-- .content -->

<?php endwhile; endif; ?>