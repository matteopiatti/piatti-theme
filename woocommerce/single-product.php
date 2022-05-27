<?php
get_header();
$product = wc_get_product(get_the_ID());
$image =get_the_post_thumbnail_url($product->ID);
$gallery_images = $product->get_gallery_image_ids();
$title_start = preg_replace('/\W\w+\s*(\W*)$/', '$1', $product->name);
$title_end = str_replace($title_start, '', $product->name);

wc_print_notices();

?>
    <main class="fullwidth pb-[30rem] sm:pb-80">
			<section class="fullwidth half-bg pb-7 pt-7">
				<article class="contentwidth">
					<h1 class="mb-8 font-title text-center text-4xl capitalize w-full font-semibold"><?php echo $title_start;?> <span class="text-rose-400"><?php echo $title_end; ?></span></h1>

					<section class="product-slider flex items-center justify-center">

						<article>
							<figure class="flex justify-center">
								<img class="max-h-64" src="<?php echo $image; ?>">
							</figure>
						</article>

						<?php foreach ($gallery_images as $img) {?>
							<article>
								<figure class="flex justify-center">
									<img class="max-h-80" src="<?php echo wp_get_attachment_image_url($img, 'full'); ?>">
								</figure>
							</article>
						<?php } ?>

					</section>
					<div class="flex flex-col">
						<h1 class="mb-8 font-title text-center text-4xl capitalize w-full font-semibold"><?php echo $product->price;?> CHF</h1>
						<a  class="m-auto shadow-lg mt-auto shadow-amber-400/40 hover:shadow-amber-400/80 no-link-style font-title font-semibold bg-amber-400 transition duration-500 hover:bg-amber-300 text-slate-800 py-3 px-12" href="<?php echo $product->add_to_cart_url() ;?>">Add to cart</a>
					</div>
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
							<article>
								<h1 class="font-title text-4xl font-semibold mb-4">Description</h1>
								<p class="text-lg font-medium"><?php echo $product->description;?></p>
							</article>
							<article>
								<h1 class="font-title text-4xl font-semibold mb-4">Specifications</h1>
								<?php echo do_action( 'woocommerce_product_additional_information', $product ); ?>
							</article>
					</section>
				</article>
			</section>

    </main>
<?php

get_footer();

