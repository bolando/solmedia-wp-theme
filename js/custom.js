jQuery(function(){
	//sticky header class
	function ustawHeader(){
		var pozycja = jQuery(document).scrollTop();
		if (pozycja > 200) {
			jQuery('#header').addClass('smaller')
		} else {
			jQuery('#header').removeClass('smaller')
		}
	}
	ustawHeader();
	jQuery(document).scroll(function() {
		ustawHeader()
	})
	//odstep
	var odstep = jQuery('#header').height();
	jQuery('.odstep').css('padding-top',odstep+'px');
})