<?php
function inspiration_render_callback() {
    $inspirations = get_field('inspirations');
    ?>
		<section class="grid grid-cols-1 md:grid-cols-2 gap-10">
			<?php foreach($inspirations as $insp) { 
				$title = $insp['title'];
				$text = $insp['text'];
				$image = $insp['image'];
				$image_url = $image['url'];
			?>
				<article class="relative flex gap-5 justify-center">
					<h3 class="absolute text-rose-400 text-2xl lg:top-5 top-1 left-5"><?php echo $title; ?></h3>
					<div class="sm:h-full sm:w-full w-max h-max md:w-max md:h-max">
						<figure class="h-full w-full object-contain">
							<img src="<?php echo $image_url; ?>" class="w-full h-full object-contain">
						</figure>
					</div>
					<div class="lg:mt-14 mt-10">
						<p><?php echo $text; ?></p>
					</div>
				</article>
			<?php } ?>
		</section>
<?php
}