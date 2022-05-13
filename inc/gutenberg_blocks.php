<?php
function register_blocks() {
    // check function exists
    if (function_exists('acf_register_block')) {
        acf_register_block(array(
            'name'				=> 'watchlist',
            'title'				=> __('watchlist'),
            'description'		=> __('watchlist'),
            'render_callback'	=> 'watchlist_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'format-image',
            'keywords'			=> array('watchlist', 'movies', 'books', 'shelf'),
						'enqueue_assets' => function(){
							wp_enqueue_script( 'watchlist', get_template_directory_uri() . '/dist/watchlist.js', array('jquery'), '', true );
						}
        ));
    }
}

add_action('acf/init', 'register_blocks');


@include 'blocks/watchlist.php';