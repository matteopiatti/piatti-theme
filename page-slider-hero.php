<?php /* Template Name: Slider Hero */
get_header();

$amount = get_field('amount');
$args = array(
	'post_type' => 'projects',
	'posts_per_page' => $amount,
	'orderby' => 'created_at',
	'order' => 'DESC'
);
$my_query = new WP_Query($args);
$posts = $my_query->posts;

?>
    <main class="fullwidth pb-[30rem] sm:pb-80">
			<section class="half-bg fullwidth pb-10 pt-10 md:pb-20 md:pt-20">
				<article class="contentwidth">
					
				<section class="template-slider flex items-center justify-center">

					<?php foreach($posts as $post) { 
						$headline = get_field('headline', $post->ID);
						$title = get_the_title($post->ID);
						$title_start = preg_replace('/\W\w+\s*(\W*)$/', '$1', $title);
						$title_end = str_replace($title_start, '', $title);
						$image = get_field('image', $post->ID)['url'];
					?>

						<article>
							<h1 class="font-title text-center text-4xl capitalize w-full font-semibold"><?php echo $title_start;?><span class="text-rose-400"><?php echo $title_end;?></span></h1>
							<figure class="flex justify-center">
								<img src="<?php echo $image; ?>">
							</figure>
							<p class="text-center text-2xl font-title font-semibold"><?php echo $headline;?></p>
							<a class="shadow-lg shadow-rose-400/40 hover:shadow-rose-400/80 mb-5 no-link-style ml-auto font-title font-semibold bg-rose-400 transition duration-500 hover:bg-rose-500 text-slate-100 py-3 px-12 mr-auto" href="<?php echo get_the_permalink($post);?>">
								Go to Project
							</a>
						</article>

					<?php } ?>

				</section>

				</article>

			</section>
			<?php wp_reset_postdata();the_content(); ?>
    </main>
<?php

get_footer();

