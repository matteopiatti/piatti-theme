<?php
function shop_banner_render_callback() {
$title = get_field('title');
$text = get_field('text');
$image = get_field('image');
$link = get_field('link');
?>
<section class="fullwidth bg-rose-400 text-slate-100">
	<article class="contentwidth">
		<section class="py-16 sm:py-20 gap-10">
			<h1 class="font-title text-3xl sm:text-4xl font-semibold mb-4"><?php echo $title; ?></h1>
			<article class="flex flex-col sm:grid sm:grid-cols-12 gap-10">

				<section class="flex flex-col col-span-7 mt-6 gap-2">
					<p class="font-body sm:text-lg mb-4"><?php echo $text; ?></p>
					<a class="shadow-lg shadow-amber-400/40 hover:shadow-amber-400/80 no-link-style font-title font-semibold bg-amber-400 transition duration-500 hover:bg-amber-300 text-slate-800 py-3 px-12 mr-auto" href="<?php echo $link['url'];?>">
						<?php echo $link['title']; ?>
					</a>
				</section>

				<section class="hidden sm:block col-span-5 col-start-9">
					<figure>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</figure>
				</section>

			</article>
		</section>
	</article>
</section>
<?php
}