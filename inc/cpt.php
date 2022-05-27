<?php

function register_custom_post_types() {
    $labels_ref = array(
        'name' => _x('watchlist', 'Post type general name', 'watchlist'),
        'singular_name' => _x('watchlist', 'Post type singular name', 'watchlist'),
        'menu_name' => _x('watchlist', 'Admin Menu text', 'watchlist'),
        'add_new' => __('add watchlist item', 'watchlist'),
        'edit_item' => __('edit watchlist item', 'watchlist'),
        'view_item' => __('view watchlist item', 'watchlist'),
        'all_items' => __('All watchlist items', 'watchlist'),
        'search_items' => __('search watchlist item', 'watchlist'),
        'not_found' => __('no watchlist items found', 'watchlist')
    );
    $args_ref = array(
        'labels' => $labels_ref,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'watchlist'),
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => 20,
        'supports' => array('title', 'editor', 'author', 'thumbnail'),
        'show_in_rest' => true
    );

    register_post_type('watchlist', $args_ref);


		$labels_ref = array(
			'name' => _x('projects', 'Post type general name', 'projects'),
			'singular_name' => _x('projects', 'Post type singular name', 'projects'),
			'menu_name' => _x('Projects', 'Admin Menu text', 'projects'),
			'add_new' => __('add project', 'projects'),
			'edit_item' => __('edit project', 'projects'),
			'view_item' => __('view project', 'projects'),
			'all_items' => __('All projects', 'projects'),
			'search_items' => __('search projects', 'projects'),
			'not_found' => __('no project found', 'projects')
	);
	$args_ref = array(
			'labels' => $labels_ref,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'projects'),
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => 20,
			'supports' => array('title', 'editor', 'author', 'thumbnail'),
			'show_in_rest' => true
	);

	register_post_type('projects', $args_ref);

}

add_action('init', 'register_custom_post_types');
