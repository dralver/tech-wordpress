<?php

$HOME_DIR = get_template_directory_uri();
define(HOME_DIR, $HOME_DIR);

add_action('init', 'my_custom_menus');

add_theme_support('post-thumbnails');
add_image_size('slider-large', 950, 540, true);
add_image_size('lead', 360, 200, true);

function my_custom_menus()
{
    register_nav_menus(array(
        'primary-menu' => __('Main Menu'),
        'footer-menu' => __('Footer Menu')
    ));
}

add_action('init', 'collections');
add_action('init', 'photos');

function photos()
{
    $labels = [
        'name' => _x('Photos', 'custom post type generic name'),
        'singular_name' => _x('all photos', 'individual custom post type name'),
        'add_new' => _x('add new photo', 'add'),
        'add_new_item' => __('add new photo'),
        'edit_item' => __('edit photo'),
        'new_item' => __('see photo'),
        'view_item' => __('see photo'),
        'not_found' => __('there are no photos'),
        'not_found_in_trash' => __('empty'),
        'parent_item_colon' => ''
    ];
    $args = array('labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'taxonomies' => array(''),
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon' => '',
        'supports' => array('title', 'thumbnail', 'excerpt', 'editor')
    );
    register_post_type('photos', $args);
}

add_action('init', 'collections');

function collections()
{
	$labels = array(
    	'name' => _x('Collections', 'taxonomy general name'),
    	'singular_name' => _x('Collections', 'taxonomy singular name'),
    	'search_items' => __('Search in Collections'),
    	'all_items' => __('All Collections '),
    	'parent_item' => __('Collections'),
    	'parent_item_colon' => __('Collections'),
    	'edit_item' => __('Edit Collection'),
    	'update_item' => __('Update Collection'),
    	'add_new_item' => __('Add New Collection'),
    	'new_item_name' => __('Add New Collection'),
	);

	register_taxonomy('collection', array('photos'), array(
    	'hierarchical' => true,
    	'labels' => $labels,
    	'show_ui' => true,
    	'query_var' => true,
    	'rewrite' => array('slug' => 'collections'),
	));
}

