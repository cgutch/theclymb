<?php
/** functions.php
 *
 * @author		CIVILIZATION
 * @package		The Clymb
 * @since		1.0.0 - 04.21.2013
 */


/* End of file functions.php */
/* Location: ./wp-content/themes/the-clymb/functions.php */



if ( !is_admin() ) {
   
   
	wp_register_script('global', '/wp-content/themes/the-clymb/js/global.js', true, 'query', true);
	
	wp_enqueue_script('global');


	
}

if ( function_exists( 'add_image_size' ) ) { 
		
		add_image_size( 'post-image', 550, 350, true ); //(cropped)
}

//add classes to even and odd posts
function oddeven_post_class ( $classes ) {
   global $current_class;
   $classes[] = $current_class;
   $current_class = ($current_class == 'odd') ? 'omega' : 'odd';
   return $classes;
}
add_filter ( 'post_class' , 'oddeven_post_class' );
global $current_class;
$current_class = 'odd';


//shorten post excerpt
function new_excerpt_length($length) {
return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');



//catch an image from each post
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "http://blog.theclymb.com/wp-content/uploads/2014/04/Mount-Muir-.jpg";
  }
  return $first_img;
}