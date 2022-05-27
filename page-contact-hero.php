<?php /* Template Name: Contact Hero */
get_header();
$links = get_field('links');

?>
    <main class="fullwidth pb-[30rem] sm:pb-80">
			<section class="fullwidth bg-amber-100 pb-10 md:pb-20 pt-7">
				<article class="contentwidth flex justify-center flex-wrap gap-8">
					<h1 class="font-title text-center text-4xl capitalize w-full font-semibold"><?php echo get_post_field( 'post_name', get_post() ); ?></h1>
					<div class="flex gap-3">
						<?php foreach($links as $i=>$link) { ?>
							<a href="<?php echo $link['link']['url']; ?>" target="<?php echo $link['link']['target'];?>"><?php echo $link['link']['title']; ?></a>
							<?php if (count($links) !== $i + 1) { ?>
								|
							<?php } ?>
						<?php } ?>
					</div>
				</article>
			</section>
			<?php the_content(); ?>
    </main>
<?php

get_footer();

