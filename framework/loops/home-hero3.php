<a href="#">Musings</a>
<?php
	query_posts('category_name=Musings&showposts=5');
	if( have_posts() ) : while( have_posts() ) : the_post(); 
?>
	<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
<?php endwhile; endif; ?> 
<span></span>
<?php rewind_posts(); ?>
