$(document).ready(function() {
	if ($("#mnv li a").length > 0) {		
		$("#mnv li a").hover(function() {	
			if (!$(this).parent().hasClass("act")) {
				$(this).parent().stop().animate({ backgroundColor: '#222222', marginTop: '-10px', height: '50px' }, 150);
				$(this).stop().animate({ paddingTop: '15px', height: '35px' }, 150);
			}
		}, function() {
			if (!$(this).parent().hasClass("act")) {
				$(this).parent().stop().animate({ backgroundColor: '#000', marginTop: '0px', height: '40px' }, 150);
				$(this).stop().animate({ paddingTop: '10px', height: '30px' }, 150);
			}			
		})
	}
});