<?php
function watchlist_render_callback() {
	$args = array(
		'post_type' => 'watchlist',
		'posts_per_page' => -1,
		'orderby' => 'created_at',
		'order' => 'ASC'
	);
  $my_query = new WP_Query($args);
	$posts = $my_query->posts;
	
	

	?>

		<section class="fullwidth">
			<article class="contentwidth">

			<div class="w-full mt-8 flex flex-wrap">
				<?php foreach ($posts as $post) {
					if (has_post_thumbnail( $post->ID ) ) {
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0];
					} else {
						$image = 'https://picsum.photos/190/280';
					}
					
					?>

					<div class="h-20 w-20 bg-amber-400"></div>

					<!-- <div class="book">
						<div class="side relative w-12 h-72 bg-rose-800 rotate-0 translate-z-0">
							<span class="spine-title"><?php echo $post->post_title;?></span>
							<span class="spine-author"> PG </span>
						</div>
						<div class="side top"></div>
						<div style="background-image: url(<?php echo $image; ?>);" class="side cover"></div>
					</div> -->
				<?php }?>
			</div>

			</article>
		</section>
<?php
}