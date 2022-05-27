<?php
get_header();
$category = $wp_query->get_queried_object();
wp_reset_postdata();
$args = array(
	'post_type' => 'product',
	'posts_per_page' => -1,
	'tax_query' => array(
		array(
				'taxonomy'      => 'product_cat',
				'terms'         => $category->term_id,
				'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
		)
	)
);
$my_query = new WP_Query($args);
$products = $my_query->posts;
?>
    <main class="fullwidth pb-[30rem] sm:pb-80">
			<section class="fullwidth bg-amber-100 pb-20 pt-7">
				<article class="contentwidth flex justify-center flex-wrap gap-8">
					<h1 class="font-title text-center text-4xl capitalize w-full font-semibold">Products in Category: <span class="text-rose-400"><?php echo $category->name; ?></h1>
					<p class="text-center w-8/12">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
				</article>
			</section>
			
			<section class="fullwidth">
				<section class="contentwidth">
					<article class="flex gap-2 justify-start py-10">
						<a class="font-medium uppercase tracking-widest text-sm font-title flex items-center gap-1" href="<?php echo get_post_type_archive_link('product');?>"><span class="material-symbols-outlined">west</span>Back to all Products</a>
					</article>
				</section>
			</section>

			<section class="fullwidth border-t-2 border-amber-200">
				<article class="contentwidth relative">

					<article class="bg-amber-200 absolute h-full m-auto left-0 right-0 w-0.5">
					</article>

					<section class="grid grid-cols-2 gap-10 gap-x-28 py-20">

						<?php foreach($products as $post) {
							$excerpt = get_the_excerpt($post);
							$title = get_the_title($post->ID);
							$image = get_the_post_thumbnail_url($post->ID);
							$category = get_the_terms ( $post->ID, 'product_cat' )[0];
							$category_url = get_category_link($category);
						?>

							<article class="flex flex-col justify-start">
								<h1 class="font-title text-4xl capitalize w-full font-semibold"><?php echo $title;?></h1>
								<a class="font-semibold text-sm tracking-widest text-gray-400 uppercase font-title mr-auto mt-2" style="border: none !important;" href="<?php echo $category_url;?>"><?php echo $category->name; ?></a>
								<img src="<?php echo $image?>">
								<p class="my-6"><?php echo $excerpt;?></p>
								<a class="shadow-lg mt-auto shadow-amber-400/40 hover:shadow-amber-400/80 no-link-style font-title font-semibold bg-amber-400 transition duration-500 hover:bg-amber-300 text-slate-800 py-3 px-12 mr-auto" href="<?php echo get_the_permalink($post);?>">
									More Info
								</a>
							</article>

						<?php } ?>

					</section>
				</article>
			</section>

    </main>
<?php

get_footer();

