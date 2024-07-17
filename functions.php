<?php

add_action( 'init', 'create_custom_post_type' );


 
//Init Hook for the custom post type
 
add_action('init', 'create_custom_post_type');
 
function create_custom_post_type() {

	$supports = array(
		'title', // post title
		'editor', // post content
		'author', // post author
		'thumbnail', // featured images
		'excerpt', // post excerpt
		'custom-fields', // custom fields
		'comments', // post comments
		'revisions', // post revisions
		'post-formats', // post formats
		);
 
$labels = array(
'name' => _x('Resource', 'plural'),
'singular_name' => _x('Resource', 'singular'),
'menu_name' => _x('Resource', 'admin menu'),
'name_admin_bar' => _x('Resource', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Resource'),
'new_item' => __('New Resource'),
'edit_item' => __('Edit Resource'),
'view_item' => __('View Resource'),
'all_items' => __('All Resource'),
'search_items' => __('Search Resource'),
'not_found' => __('No Resource found.'),
);
 
// Custom Post Type Resources
$args = array(
  'supports' => $supports,
  'labels' => $labels,
  'public' => true,
  'capability_type' => 'post',
  'taxonomies' => array( 'category', 'post_tag' ),
  'has_archive' => false,
  'rewrite' => array('slug' => 'resources'),
 );
 
register_post_type( 'resources',$args);
}



/// taxnomy



function create_resource_taxonomies() {
    // Add new taxonomy (like categories)
    $labels = array(
        'name'              => _x('Resource Type', 'taxonomy general name', 'textdomain'),
        'singular_name'     => _x('Resource Type', 'taxonomy singular name', 'textdomain'),
        'search_items'      => __('Search Resource Type', 'textdomain'),
        'all_items'         => __('All Resource Type', 'textdomain'),
        'parent_item'       => __('Parent Resource Type', 'textdomain'),
        'parent_item_colon' => __('Parent Resource Type:', 'textdomain'),
        'edit_item'         => __('Edit Resource Type', 'textdomain'),
        'update_item'       => __('Update Resource Type', 'textdomain'),
        'add_new_item'      => __('Add New Resource Type', 'textdomain'),
        'new_item_name'     => __('New Resource Type Name', 'textdomain'),
        'menu_name'         => __('Resource type', 'textdomain'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => false,
        'rewrite'           => array('slug' => 'resource_type'),
    );

    register_taxonomy('resource_type', array('resources'), $args);
}

add_action('init', 'create_resource_taxonomies');


function create_resource_taxonomies_two() {
    // Add new taxonomy
    $labels = array(
        'name'              => _x('Resource Topic', 'taxonomy general name', 'textdomain'),
        'singular_name'     => _x('Resource Topic', 'taxonomy singular name', 'textdomain'),
        'search_items'      => __('Search Resource Topic', 'textdomain'),
        'all_items'         => __('All Resource Topic', 'textdomain'),
        'parent_item'       => __('Parent Resource Topic', 'textdomain'),
        'parent_item_colon' => __('Parent Resource Topic:', 'textdomain'),
        'edit_item'         => __('Edit Resource Topic', 'textdomain'),
        'update_item'       => __('Update Resource topic', 'textdomain'),
        'add_new_item'      => __('Add Resource topic', 'textdomain'),
        'new_item_name'     => __('New Resource topic', 'textdomain'),
        'menu_name'         => __('Resource topic', 'textdomain'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => false,
        'rewrite'           => array('slug' => 'resource_topic'),
    );

    register_taxonomy('resource_topic', array('resources'), $args);
}

add_action('init', 'create_resource_taxonomies_two');