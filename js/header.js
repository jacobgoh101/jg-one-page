(function($) {
	$(document).ready(function() {
		var menuToggle = $('#js-mobile-menu').unbind();
		$('#js-navigation-menu').removeClass("show");

		menuToggle.on('click', function(e) {
			e.preventDefault();
			if($('.navigation-menu-button i').hasClass('fa-bars')){
				$('.navigation-menu-button i').removeClass('fa-bars');
				$('.navigation-menu-button i').addClass('fa-times');
			}else{
				$('.navigation-menu-button i').removeClass('fa-times');
				$('.navigation-menu-button i').addClass('fa-bars');
			}
			
			$('#js-navigation-menu').slideToggle(function(){
				if($('#js-navigation-menu').is(':hidden')) {
					$('#js-navigation-menu').removeAttr('style');
				}
				
			});
		});
	});
})( jQuery );