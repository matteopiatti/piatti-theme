<?php
function register_blocks() {
    // check function exists
    if (function_exists('acf_register_block')) {

			// WATCHLIST
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

			// INTRODUCTION
			acf_register_block(array(
				'name'				=> 'introduction',
				'title'				=> __('introduction'),
				'description'		=> __('introduction'),
				'render_callback'	=> 'introduction_render_callback',
				'category'			=> 'formatting',
				'icon'				=> 'format-image',
				'keywords'			=> array('introduction', 'name', 'me', 'hello'),
			));

			// PROJECTS BANNER
			acf_register_block(array(
				'name'				=> 'projects_banner',
				'title'				=> __('Projects Banner'),
				'description'		=> __('Projects Banner'),
				'render_callback'	=> 'projects_banner_render_callback',
				'category'			=> 'formatting',
				'icon'				=> 'format-image',
				'keywords'			=> array('projects', 'banner', 'cta', 'call to action'),
			));

			// SHOP BANNER
			acf_register_block(array(
				'name'				=> 'shop_banner',
				'title'				=> __('Shop Banner'),
				'description'		=> __('Shop Banner'),
				'render_callback'	=> 'shop_banner_render_callback',
				'category'			=> 'formatting',
				'icon'				=> 'format-image',
				'keywords'			=> array('shop', 'banner', 'cta', 'call to action'),
			));

			// SPACER
			acf_register_block(array(
				'name'				=> 'spacer',
				'title'				=> __('Spacer'),
				'description'		=> __('Spacer'),
				'render_callback'	=> 'spacer_render_callback',
				'category'			=> 'formatting',
				'icon'				=> 'format-image',
				'keywords'			=> array('distance', 'spacer'),
			));

			// WORK
			acf_register_block(array(
				'name'				=> 'work',
				'title'				=> __('work'),
				'description'		=> __('work'),
				'render_callback'	=> 'work_render_callback',
				'category'			=> 'formatting',
				'icon'				=> 'format-image',
				'keywords'			=> array('work', 'experience'),
			));

			// INSPIRATION
			acf_register_block(array(
				'name'				=> 'inspiration',
				'title'				=> __('inspiration'),
				'description'		=> __('inspiration'),
				'render_callback'	=> 'inspiration_render_callback',
				'category'			=> 'formatting',
				'icon'				=> 'format-image',
				'keywords'			=> array('inspiration', 'hobby'),
			));

			
    }
}

add_action('acf/init', 'register_blocks');


@include 'blocks/watchlist.php';
@include 'blocks/introduction.php';
@include 'blocks/projects_banner.php';
@include 'blocks/shop_banner.php';
@include 'blocks/spacer.php';
@include 'blocks/work.php';
@include 'blocks/inspiration.php';