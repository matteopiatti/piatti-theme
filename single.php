<?php
get_header();

$title = get_the_title( get_post() );
$title_start = preg_replace('/\W\w+\s*(\W*)$/', '$1', $title);
$title_end = str_replace($title_start, '', $title);
$author_id = get_post_field('post_author', get_post());
$author_name = get_the_author_meta('display_name', $author_id);
$author_description = get_field('description', 'user_' . $author_id);
$author_image = get_field('author_image', 'user_' . $author_id)['url'];

$categories = get_the_category();
?>
    <main class="fullwidth pb-[30rem] sm:pb-80 post">
			<section class="contentwidth flex sm:grid sm:grid-cols-12 gap-10">
				
				<article class="leftside flex flex-col col-span-8 sm:border-r-2 border-amber-200">

					<section class="border-b-2 border-amber-200 lg:py-20 py-8 pr-4 lg:pr-20 relative before:content-[''] before:absolute before:h-0.5 before:w-screen sm:before:w-full before:bg-amber-200 before:-bottom-0.5 before:-right-5 sm:before:right-full">
						<h1 class="font-title text-4xl capitalize w-full font-semibold"><?php echo $title_start; ?><span class="text-rose-400"><?php echo $title_end; ?></span></h1>
						<div class="flex gap-2 flex-col xl:flex-row items-start xl:items-center text-slate-500 mt-4">
							<div class="flex gap-2 items-center no-margin">
								<p class="font-thin italic text-sm">written by</p>
								<a class="xl:m-auto font-medium uppercase tracking-widest text-sm font-title" href="/about"><?php echo $author_name; ?></a>
								<p class="hidden xl:block">|</p>
							</div>
							<div class="flex gap-2 items-center no-margin">
								<p class="font-thin italic text-sm">published on</p>
								<p class="font-medium uppercase tracking-widest text-sm font-title"><?php echo get_the_date(); ?></p>
								<p class="hidden xl:block">|</p>
							</div>
							<div class="flex gap-2 items-center mt-3 xl:mt-0">
								<?php foreach ($categories as $cat) { ?>
									<a class="m-auto font-medium uppercase tracking-widest text-sm font-title" href="<?php echo get_category_link($cat);?>"><?php echo $cat->name; ?></a>
								<?php } ?>
							</div>
						</div>
					</section>

					<section class="py-4 pr-4 lg:py-20 lg:pr-20">
						<article class="has-drop-cap">
							<?php the_content(); ?>
						</article>
					</section>

				</article>

				<article class="rightside hidden col-span-4 font-title sm:flex flex-col gap-5 px-1 lg:px-8 py-8 lg:py-20">
					<p class="font-medium uppercase tracking-widest text-sm font-title leading-7 border-b-2 border-amber-200" style="margin-top: 0 !important;">about the author</p>
					<div class="flex items-center justify-between flex-col lg:flex-row">
						<p class="font-semibold"><?php echo $author_name;?></p>
						<img src="<?php echo $author_image;?>" class="rounded-full h-20 w-20 object-cover">
					</div>
					<p><?php echo $author_description;?></p>
				</article>
				
			</section>
    </main>
<?php

get_footer();

