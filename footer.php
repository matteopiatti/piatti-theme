<footer class="dark-bg fullwidth bg-zinc-900 text-slate-100 h-[30rem] sm:h-80 flex items-center absolute bottom-0 left-0">
	<section class="contentwidth flex flex-col sm:flex-row gap-10 md:gap-32 rolative">
		<article>
			<a class="font-title font-semibold tracking-widest mb-5 inline-flex" href="/">
				<p>MATTEO PIATTI</p>
			</a>
			<p class="font-light text-slate-400/50">
				<?php echo get_field('footer_description', 'option'); ?>
			</p>
		</article>
		<article class="flex gap-16">
			<section class="flex flex-col text-slate-400/50">
				<h3 class="font-title font-semibold uppercase tracking-widest mb-5"><?php echo get_field('footer_thema_1', 'option'); ?></h3>
				<a class="mr-auto font-light" href="<?php echo get_field('link_1', 'option')['url']; ?>"><?php echo get_field('link_1', 'option')['title']; ?></a>
				<a class="mr-auto font-light" href="<?php echo get_field('link_2', 'option')['url']; ?>"><?php echo get_field('link_2', 'option')['title']; ?></a>
				<a class="mr-auto font-light" href="<?php echo get_field('link_3', 'option')['url']; ?>"><?php echo get_field('link_3', 'option')['title']; ?></a>
				<a class="mr-auto font-light" href="<?php echo get_field('2_link_1', 'option')['url']; ?>"><?php echo get_field('2_link_1', 'option')['title']; ?></a>
			</section>
			<section class="flex flex-col text-slate-400/50 sm:w-28">
				<h3 class="font-title font-semibold uppercase tracking-widest mb-5"><?php echo get_field('footer_thema_2', 'option'); ?></h3>
				<a class="mr-auto font-light" href="<?php echo get_field('3_link_1', 'option')['url']; ?>"><?php echo get_field('3_link_1', 'option')['title']; ?></a>
				<a class="mr-auto font-light" href="<?php echo get_field('2_link_2', 'option')['url']; ?>"><?php echo get_field('2_link_2', 'option')['title']; ?></a>
				<a class="mr-auto font-light" href="<?php echo get_field('2_link_3', 'option')['url']; ?>"><?php echo get_field('2_link_3', 'option')['title']; ?></a>
			</section>
		</article>
		<p class="absolute text-xs text-slate-400/50 mx-auto bottom-4">© Matteo Piatti 2022</p>
	</section>
</footer>
</body>
<?php
wp_footer();