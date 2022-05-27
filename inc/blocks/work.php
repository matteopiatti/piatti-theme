<?php
function work_render_callback() {
	$works = get_field('works');
    ?>
		<section>
			<article>

				<section class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10">
					<?php foreach($works as $work) {
						$title = $work['title'];
						$description = $work['description'];
						$year = $work['year'];
						$job = $work['job'];
						$image = $work['image'];
						$image_url = $image['url'];
					?>

					<article class="bg-amber-100 rounded-lg border-2 border-amber-200">
						<div class="flex items-center gap-2 md:gap-5 border-b-2 border-amber-200 px-5 py-2 md:px-10 md:py-5">
							<figure class="max-w-[40px] max-h-[40px]">
								<img src="<?php echo $image_url; ?>" class="w-full h-full object-contain">
							</figure>
							<h3><?php echo $title; ?></h3>
						</div>
						<div class="flex flex-col gap-2 md:gap-5 px-5 py-2 md:px-10 md:py-5">
							<p class="font-semibold"><?php echo $job; ?></p>
							<p><?php echo $year; ?></p>
							<p><?php echo $description; ?></p>
						</div>
					</article>

					<?php } ?>
				</section>

			</article>
		</section>
<?php
}