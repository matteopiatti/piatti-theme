(function($) {
	$('.template-slider').slick({
		prevArrow: '<span class="cursor-pointer material-symbols-outlined">arrow_back_ios</span>',
		nextArrow: '<span class="cursor-pointer material-symbols-outlined">arrow_forward_ios</span>',
		autoplay: true,
		autoplaySpeed: 5000,
	});

	$('.product-slider').slick({
		prevArrow: '<span class="cursor-pointer material-symbols-outlined">arrow_back_ios</span>',
		nextArrow: '<span class="cursor-pointer material-symbols-outlined">arrow_forward_ios</span>',
		autoplay: false,
		autoplaySpeed: 8000,
	});
})( jQuery )