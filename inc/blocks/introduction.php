<?php
function introduction_render_callback() {
$title = get_field('title');
$text = get_field('text');
$image = get_field('image');
?>
<section class="fullwidth border-t-2 border-amber-200 mt-10 md:mt-20">
	<article class="contentwidth">
		<section class="py-10 gap-10 flex justify-center items-center sm:items-start sm:grid sm:grid-cols-2 relative">

			<article>
				<h1 class="font-title text-3xl sm:text-4xl font-semibold mb-4"><?php echo $title; ?></h1>
				<div class="text-lg"><?php echo $text; ?></div>
			</article>

			<article class="hidden sm:block bg-amber-200 absolute h-full m-auto left-0 right-0 w-0.5">
			</article>

			<article class="hidden sm:block w-7/12 justify-self-center">
				<figure class="p-2.5 relative">
					<img src="<?php echo $image['url']; ?>" alt="introduction image">
					<i class="absolute h-20 w-20 border-l-8 border-b-8 border-amber-400 -left-2.5 -bottom-2"></i>
					<i class="absolute h-20 w-20 rounded-full bg-rose-600 -top-1 -right-1"></i>
					<i class="absolute h-20 w-20 rounded-full bg-rose-400 -top-2 -right-2"></i>
				</figure>
			</article>

		</section>
	</article>
</section>
<?php
}