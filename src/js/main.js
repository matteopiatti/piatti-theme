(function($) {
	// Remove Woocommerce default notice
	if ($('.woocommerce-message').length) {
		setTimeout(function() {
			jQuery('.woocommerce-message').fadeOut('fast') 
		}, 8000)
	}

	// Header
	$('.burger').on('click', () => {
		$('body').toggleClass('menu-open')
		$('.burger p').toggleText('Close','Menu')
		$('.mobile-menu').toggleClass('open')
		$('body').toggleClass('overflow-y-hidden')
	})

	jQuery.fn.extend({
		toggleText: function (a, b){
			if (this.text() === a) {
				this.text(b);
			} else {
				this.text(a);
			}
			return this;
		}
	});

	$('.wpcf7').on('wpcf7invalid', function(event) {
		$(this).append(`
		<div class="error">
			<div class="woocommerce-message">
				${event.detail.apiResponse.message}
				<span class="material-symbols-outlined">
					warning
				</span>
			</div>
		</div>`)
		setTimeout(function() {
			jQuery('.woocommerce-message').fadeOut('fast') 
		}, 8000)
	})

	$('.wpcf7').on('wpcf7mailsent', function(event) {
		$(this).append(`
		<div class="success">
			<div class="woocommerce-message">
				${event.detail.apiResponse.message}
				<span class="material-symbols-outlined">
					task_alt
				</span>
			</div>
		</div>`)
		setTimeout(function() {
			jQuery('.woocommerce-message').fadeOut('fast') 
		}, 8000)
	})

	let button = $('.wpcf7-form .wpcf7-submit')[0]

	$(document).on('submit', (e) => {
		$('.wpcf7-form .wpcf7-submit').replaceWith(`<button type="submit" value="Submit" class="wpcf7-form-control has-spinner wpcf7-submit">
		<svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
			<circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
			<path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
		</svg>
		</button>`)
	})

	$('.wpcf7').on('wpcf7submit', function(event) {
		$('.wpcf7-form .wpcf7-submit').replaceWith(button)
	})
})( jQuery )