<?php 
query_posts( 'posts_per_page=3&category_name=Home Page CTAs' );
if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<li>
	<h4><?php the_title(); ?></h4>
	<?php echo getImgSrc($post->ID); ?>
	<p><?php the_excerpt(); ?></p>
	<a href="<?php the_permalink(); ?>" class="blue-cta">More Info<span>▶</span></a>
</li>
<?php endwhile; endif; wp_reset_query(); ?>