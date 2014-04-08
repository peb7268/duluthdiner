</div><!-- #wrapper -->
<?php /*
			wp_nav_menu( array(
				 'theme_location'  => 'Footer', 
				 'container' => false,
				 'menu_id' => 'navigation-footer',
				 'menu_class' => 'clearfix'
				 )
			); 
			*/
?>
<?php 
	wp_footer(); 
	if (current_user_can('administrator') && SAVEQUERIES){
	    global $wpdb;
	    echo "<pre id='db_queries'>";
	    print_r($wpdb->queries);
	    echo "</pre>";
	}
?>
</body>
</html>