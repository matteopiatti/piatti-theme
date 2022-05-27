<?php
function watchlist_render_callback() {
	$args = array(
		'post_type' => 'watchlist',
		'posts_per_page' => -1,
		'orderby' => 'published_at',
		'order' => 'ASC'
	);
  $my_query = new WP_Query($args);
	$posts = $my_query->posts;
	//var_dump($posts);
	$posts_by_date = array();

	foreach($posts as $post) {
		$date = get_the_date('Y', $post);
		if(!isset($posts_by_date[$date])) {
			$posts_by_date[$date] = array();
		}
		array_push($posts_by_date[$date], $post);
	}
	//var_dump($posts_by_date);


	?>

		<section class="fullwidth">
			<article class="contentwidth">

			<?php foreach($posts_by_date as $key => $pbd) {
				$items = $posts_by_date[$key];
				?>

					<div class="w-full mt-8 flex flex-wrap gap-y-10">
						<h1 class="font-title text-3xl sm:text-4xl capitalize w-full font-semibold"><?php echo $key; ?></h1>
						<?php foreach ($items as $item) {
							if (has_post_thumbnail( $item->ID ) ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $item->ID ), 'single-post-thumbnail' )[0];
							} else {
								$image = 'https://picsum.photos/190/280';
							}

							$director = get_field('director', $item->ID);
							$split = explode(' ', $director);
							$director_last_name = array_pop($split);

						?>
				
						<a href="<?php echo get_the_permalink($item);?>" class="no-link-style">
							<div class="book book-hover w-12 h-64 relative ml-px ">
								<div class="side spine top-0.5 hover:rounded-tl absolute text-center text-zinc-900 border-2 border-solid border-black w-12 h-64 bg-zinc-800 rotate-0 translate-z-0">
									<span class="spine-title m-0.5 absolute top-0 left-0 text-xs text-amber-400"><?php echo $item->post_title;?></span>
									<span class="absolute text-amber-400 bottom-0 left-1/4"> <?php echo $director[0], $director_last_name[0];?> </span>
								</div>
								<div class="side absolute text-center text-zinc-900 rounded border-2 border-solid border-black top bg-zinc-800 w-12 h-48 top-0.5"></div>
								<div style="background-image: url(<?php echo $image; ?>);" class="side absolute text-center text-zinc-900 rounded border-2 border-solid border-black cover w-48 h-64 top-0.5 left-[47px] bg-cover bg-repeat-round"></div>
							</div>
						</a>

						<?php } ?>
					</div>
					<hr class="my-5 border-4 border-amber-200" />
				<?php } ?>
			</article>
		</section>
<?php
}