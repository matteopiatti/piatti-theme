<?php
get_header();

?>
    <main class="fullwidth pb-[30rem] sm:pb-80 post">
			<section class="fullwidth bg-amber-100 pb-20 pt-7">
				<article class="contentwidth flex justify-start flex-wrap gap-8">
					<h1 class="font-title text-4xl capitalize w-full font-semibold"><?php echo get_the_title( get_post() ); ?></h1>
					<p class="w-10/12 sm:w-8/12"><?php echo get_field('description'); ?></p>
				</article>
			</section>
			<section class="fullwidth pt-20">
				<article class="contentwidth">
					<?php the_content(); ?>
				</article>
			</section>
    </main>
<?php

get_footer();

