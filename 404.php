<?php get_header(); ?>


<section class="fullwidth h-[calc(100vh-28rem)]">
	<section class="contentwidth h-full flex items-center justify-center">
		<article class="grid grid-cols-8 gap-5 relative before:content-[''] before:absolute before:w-0.5 before:h-full before:bg-amber-200 before:left-[calc(100%/8*2-5px)]">
			<div class="col-span-2">
				<h1 class="text-7xl text-rose-400">404</h1>
			</div>
			<div class="col-span-6 flex flex-col gap-4">
				<h1>Page not found</h1>
				<p>Please check the URL in the address bar and try again</p>
				<div class="flex gap-3">
					<a class="shadow-lg mt-auto shadow-amber-400/40 hover:shadow-amber-400/80 no-link-style font-title font-semibold bg-amber-400 transition duration-500 hover:bg-amber-300 text-slate-800 py-3 px-12 mr-auto" href="/">
						Go back home
					</a>
					<a class="m-auto" href="/contact">
						Report a problem
					</a>
				</div>
			</div>
		</article>
	</section>
</section>

<?php get_footer(); ?>

