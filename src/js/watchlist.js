(function($) {

	// TODO: Multiple books at once?

	$('.book').on('click', function() {
		$(this).toggleClass('book-open book-hover')
	})

})( jQuery )