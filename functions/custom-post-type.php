<?php
/* joints Custom Post Type Example
This page walks you through creating
a custom post type and taxonomies. You
can edit this one or copy the following code
to create another one.

I put this in a separate file so as to
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/
add_action( 'init', 'inps_register_cpt' );
function inps_register_cpt() {
register_post_type('buy-native-plants', array(
 		'labels' => array(
   			'name' => 'Designer &amp; Seller',
			'singular_name' => 'Entry',
   			'add_new' => 'Add Entry',
   			'add_new_item' => 'Add New Entry',
   			'new_item' => 'Add New Entry',
			'edit_item' => 'Edit Entry',
   			'update_item' => 'Update Entry',
			'search_items' => 'Search Designer &amp; Sellers'
   			),
   	'public' => true,
   	'show_ui' => true,
   	'show_in_menu' => true,
   	'menu_icon' => 'dashicons-groups',
   	'capability_type' => 'post',
	'taxonomies'          => array( 'category' ),
    'menu_position' => 4,
   	'hierarchical' => false,

   	'query_var' => true,
   	'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'post-thumbnails'),
   	'has_archive' => true,
	'rewrite' => array('slug' => 'buy-native-plants'),
   		)

   	);
}
// Register Location

    /*
    	looking for custom meta boxes?
    	check out this fantastic tool:
    	https://github.com/CMB2/CMB2
    */
