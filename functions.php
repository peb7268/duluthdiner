<?php
define('THEME_DIR', get_template_directory_uri());
define('CSS_DIR', THEME_DIR.'/styles');
define('JS_DIR', THEME_DIR.'/js');
define('IMG_DIR', THEME_DIR.'/img');
define('VIDEOS_DIR', THEME_DIR.'/videos');
define('SLIDESHOW_DIR', IMG_DIR.'/slideshow');

function generateDropdown($name, $id = null)
{
$returnVal = <<<EOF
<select name="$name" id="$name"><option value="0" selected="">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select>
EOF;

	return $returnVal;
}

function initTheme()
{
	add_action('wp_loaded', 'setupTheme'); //Ensures page conditionals work
	add_shortcode('get_theme_dir', 'get_theme_dir');
}
function removeDefaults()
{
	remove_filter ('the_content','wpautop');
	remove_filter ('the_excerpt','wpautop');
}
function registerScripts()
{
	wp_register_script('fancybox', JS_DIR.'/fancybox/source/jquery.fancybox.js', array(), false, false);
	wp_register_script('home', JS_DIR.'/home.js', array('fancybox'), false, true);
	wp_register_script('global', JS_DIR.'/global.js', array(), false, true);
	wp_register_script('nivo', JS_DIR.'/nivo-slider/jquery.nivo.slider.pack.js', array(), false, false);
	wp_register_script('responsiveslides', JS_DIR.'/responsiveslides/responsiveslides.js', array(), false, false);
	//wp_register_style( $handle, $src, $deps = array, $ver = false, $media = 'all' )

	wp_register_style('nivo', JS_DIR.'/nivo-slider/nivo-slider.css', array(), false, 'all');
	wp_register_style('responsiveslides', JS_DIR.'/responsiveslides/responsiveslides.css', array(), false, 'all');
	wp_register_style('fancybox', JS_DIR.'/fancybox/source/jquery.fancybox.css', array(), false, 'all');
}
function enqueueScripts()
{
	wp_enqueue_script('jquery');
	wp_enqueue_script('global');

	if(is_page('home') || is_front_page()){
		wp_enqueue_script('home');
		//wp_enqueue_script('nivo');
		wp_enqueue_script('responsiveslides');
		wp_enqueue_script('fancybox');

		//wp_enqueue_style('nivo');
		wp_enqueue_style('responsiveslides');
		wp_enqueue_style('fancybox');
	}
	if(is_page(277)){
		wp_enqueue_script('fancybox');
		wp_enqueue_style('fancybox');
	}
}
function setupTheme()
{
	removeDefaults();
	registerScripts();
	add_action('wp_enqueue_scripts' ,'enqueueScripts');
	//registerStickyPosts();

	//Configure Featured Imaged
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 655, 0, false );						//Sets the default size

	//Set a $size var equal to default WP sizes for these in your themes
	//Sizes are: "thumbnail", "medium", "large" and "full" ( full being the cropped default size we said )
	add_image_size( 'banner-full-lanscape', 655, 9999, false);
	add_image_size( 'banner-full-square', 655, 9999, false);
	add_image_size( 'featured-square', 180, 999, false);
}
function custom_excerpt_length( $length )
{
	return 20;
}

//Configs
register_nav_menus( array(
	'Primary' => 'Primary Navigation Menu',
	'Footer' => 'Footer Navigation Menu'
) );


//Actions
add_action('init', 'initTheme');

//Filters
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


//Utility functions
function getImgSrc(){
	if ( has_post_thumbnail($id) ) {
		return get_the_post_thumbnail($id);
	} else {
		return '<img src="#" alt="docplus.net">';
	}
}

function _exec_php( $atts, $content = null){
	extract( shortcode_atts( array(
      'name' => 'name',
      'id' 	 => 'id'
      ), $atts ) );
	return call_user_func('generateDropdown', $name, $id);
}
function loggedInLink($post, $redirect_link = ""){
	$private = 0;
	if(is_user_logged_in()){
		if($redirect_link){
			$content  = "<a href='". $post->guid ."' class='redirect_link' data-redirect='".$redirect_link."'>". $post->post_title ."</a>";
		} else {
			$content  = "<a href=". $post->guid .">". $post->post_title ."</a>";
		}

		return $content;
	} else {
		$private++;
	}
	if( $private > 0 ){
		return 0;
	}
}
function redirect_check($post){
	$redirect_link = get_post_meta($post->ID, 'redirect_link');
	$should_redirect = get_post_meta($post->ID, 'should_redirect');
	if(!empty($redirect_link) && $should_redirect[0]){
		return $redirect_link[0];
	}
};

//Custom Debugging methods
function __e($obj){
	echo '<pre>';
	var_dump($obj);
	echo '</pre>';
}

#Shortcodes
#For Content Editor
function get_theme_dir(){
	$dir = get_bloginfo('stylesheet_directory').'/';
	return $dir;
}
#For the form generator on forms
add_shortcode('_exec_php', '_exec_php');

wp_register_style('ie', CSS_DIR.'/ie.css', array(), false, 'all');
wp_enqueue_style('ie');