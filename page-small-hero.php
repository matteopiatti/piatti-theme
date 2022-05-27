<?php /* Template Name: Small Hero */
get_header();

?>
    <main class="fullwidth pb-[30rem] sm:pb-80">
			<section class="fullwidth bg-amber-100 pb-10 md:pb-20 pt-7">
				<article class="contentwidth flex justify-center flex-wrap gap-8">
					<h1 class="font-title text-center text-4xl capitalize w-full font-semibold"><?php echo get_post_field( 'post_name', get_post() ); ?></h1>
					<p class="text-center w-10/12 sm:w-8/12"><?php echo get_field('desc'); ?></p>
				</article>
			</section>
			<?php the_content(); ?>
    </main>
<?php

get_footer();

