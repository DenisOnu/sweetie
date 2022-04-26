(function($) {
    "use strict";
/* ..............................................
    Fixed Menu
    ................................................. */
    
	$(window).on('scroll', function () {
		if ($(window).scrollTop() > 50) {
			$('.top-header').addClass('fixed-menu');
            $('.heading').addClass('fixed-heading');
            $('.fflower').addClass('fixed-image');
		} else {
			$('.top-header').removeClass('fixed-menu');
            $('.heading').removeClass('fixed-heading');
            $('.fflower').removeClass('fixed-image');
		}
	});

	
}(jQuery));