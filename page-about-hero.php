<?php /* Template Name: About Hero */
get_header();

?>
    <main class="fullwidth pb-[30rem] sm:pb-80">
			<section class="fullwidth pb-10 md:pb-20 half-bg">
				<article class="contentwidth flex justify-center flex-wrap gap-8">
					<section class="flex justify-between items-center gap-4 pt-10 md:pt-20">

						<h1 class="tracking-widest text-xl sm:text-4xl md:text-5xl lg:text-6xl">MATTEO</h1>
						
						<article>
							<figure class="rounded-full lg:h-64 lg:w-64 md:w-60 md:h-60 sm:w-48 sm:h-48 w-28 h-28 overflow-hidden">
								<img src="<?php echo get_field('image')['url'];?>" class="w-full h-full object-cover object-center">
							</figure>
						</article>

						<h1 class="tracking-widest text-xl sm:text-4xl md:text-5xl lg:text-6xl">PIATTI</h1>


					</section>
				</article>
			</section>
			<section class="contentwidth">
				<article class="has-drop-cap py-10 md:py-20">
					<?php the_content(); ?>
				</article>
			</section>
    </main>
<?php

get_footer();

