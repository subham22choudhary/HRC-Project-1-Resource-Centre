<?php


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
'name' => _x('cats', 'plural'),
'singular_name' => _x('cats', 'singular'),
'menu_name' => _x('cats', 'admin menu'),
'name_admin_bar' => _x('cats', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New cats'),
'new_item' => __('New cats'),
'edit_item' => __('Edit cats'),
'view_item' => __('View cats'),
'all_items' => __('All cats'),
'search_items' => __('Search cats'),
'not_found' => __('No cats found.'),
);

$args = array(
'supports' => $supports,
'labels' => $labels,
'description' => 'Holds our cats and specific data',
'public' => true,
'taxonomies' => array( 'category', 'post_tag' ),
'show_ui' => true,
'show_in_menu' => true,
'show_in_nav_menus' => true,
'show_in_admin_bar' => true,
'can_export' => true,
'capability_type' => 'post',
 'show_in_rest' => true,
'query_var' => true,
'rewrite' => array('slug' => 'cats'),
'has_archive' => true,
'hierarchical' => false,
'menu_position' => 6,
'menu_icon' => 'dashicons-megaphone',
);

register_post_type('cats', $args); // Register Post type
}


?>