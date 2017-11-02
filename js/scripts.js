( function($) {
	$(document).ready(function() {
		$('#fullpage').fullpage({
			anchors: ['win', 'album', 'gigs', 'contact'],
			menu: '#primary-menu',
			keyboardScrolling: false,
			animateAnchor: false,
			verticalCentered: false
		});

		$('#fullpage').fullpage({
			anchors: ['win', 'album', 'gigs', 'contact'],
			menu: '#mobile-menu',
			keyboardScrolling: false,
			animateAnchor: false,
			verticalCentered: false
		});

		$.fn.fullpage.setMouseWheelScrolling(false);
    		$.fn.fullpage.setAllowScrolling(false);

	});
;})(jQuery);