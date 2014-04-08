<?php
if( has_post_thumbnail() ){
	the_post_thumbnail($size);
} else { 
	if($else) { ?>
	<div class="frame">
		<h2 class="defaultFeaturedImg">D<span>D</span></h2>
		<p class="subtitle">Duluth Diner</p>
	</div><!-- .frame -->
<?php }} ?>