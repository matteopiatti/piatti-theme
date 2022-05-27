<?php
get_header();

$category = $wp_query->get_queried_object();
wp_reset_postdata();
$args = array(
	'post_type' => 'projects',
	'posts_per_page' => -1,
	'orderby' => 'created_at',
	'order' => 'DESC',
	'category_name' => $category->name
);
$my_query = new WP_Query($args);
$posts = $my_query->posts;

?>
    <main class="fullwidth pb-[30rem] sm:pb-80">
			<section class="fullwidth bg-amber-100 pb-10 md:pb-20 pt-7">
				<article class="contentwidth flex justify-center flex-wrap gap-8">
					<h1 class="font-title text-center text-4xl capitalize w-full font-semibold">Projects with Category: <span class="text-rose-400"><?php echo $category->name; ?></span></h1>
					<p class="text-center w-10/12 sm:w-8/12"><?php echo $category->description; ?></p>
				</article>
			</section>
			
			<section class="fullwidth">
				<section class="contentwidth">
					<article class="flex gap-2 justify-start py-10">
						<a class="font-medium uppercase tracking-widest text-sm font-title flex items-center gap-1" href="<?php echo get_post_type_archive_link('projects');?>"><span class="material-symbols-outlined">west</span>Back to all Projects</a>
					</article>
				</section>
			</section>			

			<section class="fullwidth border-t-2 border-amber-200">
				<article class="contentwidth relative">

					<article class="hidden md:block bg-amber-200 absolute h-[calc(100%+20rem)] m-auto left-0 right-0 w-0.5">
					</article>

					<section class="grid md:grid-cols-2 gap-10 gap-x-28 py-10 md:py-20">

						<?php foreach($posts as $post) {
							$excerpt = get_the_excerpt($post);
							$title = get_the_title($post->ID);
							$category = get_the_category($post->ID)[0]->name;
						?>

							<article class="flex flex-col justify-start">
								<h1 class="font-title text-3xl sm:text-4xl capitalize w-full font-semibold"><?php echo $title;?></h1>
								<p class="font-semibold text-sm tracking-widest text-gray-400 uppercase font-title"><?php echo $category; ?></p>
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

