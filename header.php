<!DOCTYPE html>
<html lang="de" class="font-body">

<head>
<!--    /*-----------CUSTOM------------*/-->
<!---->
<!--    /*META*/-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--    Register Styles and Scripts in Functions.-->
<!---->
<!--    /*-----------CUSTOM END--------*/-->
    <?php wp_head(); ?>
</head>

<body <?php body_class('relative min-h-screen'); ?>>

<!-- TODO: Mobile and Underline -->

<header class="fullwidth h-24 bg-amber-100 z-20 t-0 font-title flex items-center">
    <section class="contentwidth flex justify-between items-baseline">
        <a class="font-semibold tracking-widest" href="/">
					<p>MATTEO PIATTI</p>
				</a>
				
				<?php
				wp_nav_menu( array(
						'theme_location' => 'main_navigation',
						'container' => 'nav',
						'container_id' => 'main_navigation'
				) );
				?>

				<a class="hidden md:block font-semibold tracking-widest" href="/about">
					<p>ABOUT</p>
				</a>

				<div class="md:hidden mobile-menu pt-20 flex flex-col absolute gap-6 bg-amber-100 left-0 right-0 top-24 bottom-0 z-[100000000] items-center">
					<?php
					wp_nav_menu( array(
							'theme_location' => 'main_navigation',
							'container' => 'nav',
							'container_id' => 'main_navigation'
					) );
					?>

					<a class="text-xl" href="/about">
						About
					</a>
				</div>

        <nav class="md:hidden flex gap-3 self-center cursor-pointer items-center burger">
					<div class="flex flex-col gap-1 w-5">
            <i class="w-full h-0.5 bg-slate-800"></i>
            <i class="w-full h-0.5 bg-slate-800"></i>
            <i class="w-full h-0.5 bg-slate-800"></i>
					</div>
					<p>Menu</p>
        </nav>
    </section>

</header>