<?php
function projects_banner_render_callback() {
	$args = array(
		'post_type' => 'projects',
		'posts_per_page' => 8,
		'orderby' => 'created_at',
		'order' => 'DESC'
	);
  $my_query = new WP_Query($args);
	$posts = $my_query->posts;

	$title = get_field('title');

?>
<section class="fullwidth bg-amber-100">
	<article class="contentwidth">
		<section class="py-16">
			
			<h1 class="font-title text-3xl sm:text-4xl font-semibold mb-4"><?php echo $title; ?></h1>

			<article class="gap-5 flex flex-col sm:grid sm:grid-cols-2 relative">
				<?php foreach ($posts as $post) {

					$category = get_the_category($post->ID)[0];
					$category_url = get_category_link($category);
				?>

					<section>
						<a class="font-semibold text-sm tracking-widest text-gray-400 uppercase font-title mr-auto" style="border: none !important;" href="<?php echo $category_url;?>"><?php echo $category->name; ?></a>
						<a href="<?php echo get_permalink($post); ?>" class="sm:text-lg">
							</p><?php echo $post->post_title;?>
						</a>
					</section>

				<?php } ?>
			</article>

		</section>
	</article>
</section>
<?php
}