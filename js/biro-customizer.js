(function(jQuery) {

    // Fast update of the header background color
    wp.customize('biro-header_background_color', function(value){
		value.bind(function(newval){
			jQuery('.header-container').css('background-color', newval);
		});
	});

    wp.customize('biro-footer_background_color', function(value){
        value.bind(function(newval){
			jQuery('.footer-container').css('background-color', newval);
		});
	});

    wp.customize('biro-header_nav_text_color', function(value){
        value.bind(function(newval){
			jQuery('header > nav ul li a').css('color', newval);
		});
	});

})(jQuery);
