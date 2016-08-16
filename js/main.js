var PeaProfile = (function() {

	var	methods = {

		photoAlbum: function() {
			$('.findapea-profile-info-photoalbum-container').slick({
			  slidesToShow: 4,
			  slidesToScroll: 2,
			  infinite: true,
			  lazyLoad: 'ondemand',
			  prevArrow: '.photoalbum-prev',
			  nextArrow: '.photoalbum-next'			  
			});
		},

		albumFancybox: function() {
			$('.fancybox').fancybox();
		}

	}

	return methods;

})();


var ListingUser = (function() {

	var methods = {

		heightAdjust: function() {
			$('.listing-page-map-container img').css({
				'height': $(window).height() - 60
			});			
			$('.listing-page-query-profile').css({
				'height': $(window).height() - 145
			});						
			$(window).on('debouncedresize', function( event ) {
				$('.listing-page-map-container img').css({
					'height': $(window).height() - 60
				});
				$('.listing-page-query-profile').css({
					'height': $(window).height() - 130
				});					
			});			
		}

	}

	return methods;

})();
