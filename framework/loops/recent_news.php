<?php
	query_posts( 'category_name=Recent News' ); 
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; endif;