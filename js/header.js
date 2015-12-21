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
		if($(window).height() > 400){
			var navigationPositionTop = $('.navigation').position().top;
			$(window).scroll(function() {
				if($(window).scrollTop() >= navigationPositionTop){
					$('.navigation').addClass('sticky-header');
					$('#sticky-header-empty-space').removeClass('sticky-header-off');
					$('#sticky-header-empty-space').addClass('sticky-header-on');
				}
				if($(window).scrollTop() < navigationPositionTop){
					$('.navigation').removeClass('sticky-header');
					$('#sticky-header-empty-space').removeClass('sticky-header-on');
					$('#sticky-header-empty-space').addClass('sticky-header-off');
				}

			});
		}
	});

	$(window).load(function() {
		$("#preloader").fadeOut("slow");
	});
	
})( jQuery );