<?php //Recycle this query
#Page Content
if( have_posts() ) : while( have_posts() ) : the_post(); ?>	
	<div class="content">
		<?php the_content(); ?>
	</div><!-- .content -->
<?php endwhile; endif; 

#Public Content
echo "<ul class='public'>";
$public_query = new Wp_Query('cat=7');
if( $public_query->have_posts() ) : while( $public_query->have_posts() ) : $public_query->the_post(); ?>	
	<li>
		<a href="<?php the_permalink(); ?>" <?php echo redirect_check($post); ?>><?php the_title(); ?></a>
	</li>
<?php endwhile; endif; 
echo "</ul>";

echo "<h4>Members Training</h4>";
#Protected Content
echo "<ul class='private'>";
$query = new Wp_Query('cat=6');
if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>	
	<li>	
		<?php $redirect_link = redirect_check($post); ?>
		<?php 
			$link = loggedInLink($post, $redirect_link); 
			if($link !== 0) {
				echo $link;
			}
		?>
	</li>
<?php 
	endwhile; endif; 
	if($link == 0){
		echo '<h4 class="attention">You Must Be Logged In To View These Materials</h4>';
	}
?>
	
</ul>