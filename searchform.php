<div id="social">
	<div class="content">
		<form role="search" method="get" id="search" action="<?php echo home_url( '/' ); ?>">
        <p class="clearfix">
        	<input type="text" value="" name="s" id="s" placeholder="Search.." />
        	<input type="submit" id="submit" value="Search" />
        </p>
		</form>

		<img src="<?php echo IMG_DIR; ?>/facebook_cta.png" >

		<ul id="social-sprite">
			<li class="twitter">
				<a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-lang="en">Tweet</a>
			</li><!-- .twitter -->
			<li class="facebook">
				<div id="fb-root"></div>
				<div class="fb-like" data-layout="box_count" data-send="false" data-width="450" data-show-faces="false"></div>
			</li><!-- .facebook -->
			<li class="gp">
				<div class="g-plusone" data-annotation="bubble" data-size="tall" ></div>
			</li><!-- .gp -->
		</ul>
	</div><!-- .content -->
	<a href="#" class="trigger"></a>
</div><!-- social -->
