jQuery(function($){
	//sticky header class
	function ustawHeader(){
		var pozycja = $(document).scrollTop();
		if (pozycja > 200) {
			$('#header').addClass('smaller')
		} else {
			$('#header').removeClass('smaller')
		}
	}
	ustawHeader();
	$(document).scroll(function() {
		ustawHeader()
	})
	//Ukrycie menu przy scrollowaniu na komórce
	var prevScrollpos = $(document).scrollTop();
	$(document).scroll(function(){
	  var currentScrollPos = $(document).scrollTop();
	  if (prevScrollpos > currentScrollPos) {
		$('#header').show();
	  } else {
		$('#header').hide();
	  }
	  prevScrollpos = currentScrollPos;
	})
	//odstep
	var odstep = $('#header').height();
	$('.odstep').css('padding-top',odstep+'px');
})