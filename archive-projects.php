<?php
get_header();

$args = array(
	'post_type' => 'projects',
	'posts_per_page' => -1,
	'orderby' => 'created_at',
	'order' => 'DESC'
);
$my_query = new WP_Query($args);
$posts = $my_query->posts;
$categories = get_the_category();

?>
    <main class="fullwidth pb-[30rem] sm:pb-80">
			<section class="fullwidth bg-amber-100 pb-10 md:pb-20 pt-7">
				<article class="contentwidth flex justify-center flex-wrap gap-8">
					<h1 class="font-title text-center text-4xl capitalize w-full font-semibold">Projects</h1>
					<p class="text-center w-10/12 sm:w-8/12"><?php echo get_field('archive_description', 'options'); ?></p>
				</article>
			</section>
			
			<section class="fullwidth">
				<section class="contentwidth">
					<h3 class="pb-5 pt-10">Filter by Category:</h3>
					<article class="flex gap-2 flex-wrap justify-start pb-10">
						<?php $i=0; foreach ($categories as $cat) { ?>
							<a class="font-medium uppercase tracking-widest text-sm font-title" href="<?php echo get_category_link($cat);?>"><?php echo $cat->name; ?></a>
							<?php if ($i !== count($categories) -1 ) { ?>
								|
							<?php } $i++; ?>
						<?php } ?>
					</article>
				</section>
			</section>

			<section class="fullwidth border-t-2 border-amber-200">
				<article class="contentwidth relative">

					<article class="hidden md:block bg-amber-200 absolute h-full m-auto left-0 right-0 w-0.5">
					</article>

					<section class="grid md:grid-cols-2 gap-10 gap-x-28 py-10 md:py-20">

						<?php foreach($posts as $post) {
							$excerpt = get_the_excerpt($post);
							$title = get_the_title($post->ID);
							$category = get_the_category($post->ID)[0];
							$category_url = get_category_link($category);
						?>

							<article class="flex flex-col justify-start">
								<h1 class="font-title text-3xl sm:text-4xl capitalize w-full font-semibold"><?php echo $title;?></h1>
								<a class="font-semibold text-sm tracking-widest text-gray-400 uppercase font-title mr-auto" style="border: none !important;" href="<?php echo $category_url;?>"><?php echo $category->name; ?></a>
								<p class="my-6"><?php echo $excerpt;?></p>
								<a class="shadow-lg mt-auto shadow-rose-400/40 hover:shadow-rose-400/80 mb-5 no-link-style font-title font-semibold bg-rose-400 transition duration-500 hover:bg-rose-500 text-slate-100 py-3 px-12 mr-auto" href="<?php echo get_the_permalink($post);?>">
									Go to Project
								</a>
							</article>

						<?php } ?>

					</section>
				</article>
			</section>

    </main>
<?php

get_footer();

