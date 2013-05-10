<?php
register_sidebar(array(
    'name' => __( 'Sidebar One' ),
    'id' => 'sidebar-one',
    'description' => __( 'Sidebar one' )));


register_nav_menu( 'primary', 'Hovedmeny' );
register_nav_menu( 'footer', 'Footermeny' );

add_theme_support( 'post-thumbnails' );

add_image_size( 'eight-columns', 650, 500, true );
add_image_size( 'four-columns', 310, 160, true );


function studio_enqueue_scripts() {
	// script location, dependencies and version
	wp_register_script( 'foundation', get_template_directory_uri().'/js/foundation/foundation.js', array('jquery') );
	wp_register_script( 'foundation-joyride', get_template_directory_uri().'/js/foundation/foundation.joyride.js', array('foundation') );
	wp_register_script( 'instafeed', get_template_directory_uri().'/js/vendor/instafeed.min.js' );
	wp_register_script( 'moment', get_template_directory_uri().'/js/vendor/moment.min.js' );
	wp_register_script( 'skrollr', get_template_directory_uri().'/js/vendor/skrollr.min.js' );
	wp_register_script( 'skrollr-stylesheets', get_template_directory_uri().'/js/vendor/skrollr.stylesheets.min.js' );
	wp_register_script( 'application', get_template_directory_uri().'/js/main.js', array('instafeed', 'foundation-joyride', 'moment', 'skrollr', 'skrollr-stylesheets') );

    // enqueue them
	wp_enqueue_script( 'application' );
}
add_action( 'wp_enqueue_scripts' , 'studio_enqueue_scripts' );

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

/* post type */
// Register Custom Post Type
function studio_artists_post_type() {
	$labels = array(
		'name'                => _x( 'Artists', 'Post Type General Name', 'studio' ),
		'singular_name'       => _x( 'Artist', 'Post Type Singular Name', 'studio' ),
		'menu_name'           => __( 'Artist', 'studio' ),
		'parent_item_colon'   => __( 'Parent Artist:', 'studio' ),
		'all_items'           => __( 'All Artists', 'studio' ),
		'view_item'           => __( 'View Artist', 'studio' ),
		'add_new_item'        => __( 'Add New Artist', 'studio' ),
		'add_new'             => __( 'New Artist', 'studio' ),
		'edit_item'           => __( 'Edit Artist', 'studio' ),
		'update_item'         => __( 'Update Artist', 'studio' ),
		'search_items'        => __( 'Search Artists', 'studio' ),
		'not_found'           => __( 'No artists found', 'studio' ),
		'not_found_in_trash'  => __( 'No artists found in Trash', 'studio' ),
	);

	$args = array(
		'label'               => __( 'artist', 'studio' ),
		'description'         => __( 'Artist information pagews', 'studio' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		//'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	register_post_type( 'artist', $args );
}

// Hook into the 'init' action
add_action( 'init', 'studio_artists_post_type', 0 );

?>
