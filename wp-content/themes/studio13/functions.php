<?php
register_sidebar(array(
    'name' => __( 'Sidebar One' ),
    'id' => 'sidebar-one',
    'description' => __( 'Sidebar one' )));


register_nav_menu( 'primary', 'Hovedmeny' );
register_nav_menu( 'footer', 'Footermeny' );

add_theme_support( 'post-thumbnails' );

/* TODO: Add these js thingies:
    	<script src="javascripts/foundation/foundation.joyride.js"></script>
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'javascripts/vendor/zepto' : 'javascripts/vendor/jquery') +
  '.js><\/script>')
  </script>
<script>
    $(document).foundation();
  </script>

   */
/* Modify the output of list items in the header navigation menu.
 *
 * Remove the whitespace between HTML tags. Required specifically for better
 * behavior when list items are inline-block in our main nav menu and need
 * the browsers to adhere to exact margins.
 *
 * NOTE: filter name changes depending on your menu - this one works for 'hoved'
*/
function prefix_remove_menu_item_whitespace( $html_content ) {
	return preg_replace( '/>\s+</', '><', $html_content );
}
add_filter( 'wp_nav_menu_hoved_items', 'prefix_remove_menu_item_whitespace' );

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more($more) {
    global $post;
    return '... <a class="moretag" href="'. get_permalink($post->ID) . '">les mer</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>
