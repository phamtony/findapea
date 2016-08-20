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


var PlaceProfile = (function() {

	var methods = {

		slickCarousel: function() {
			$('.findapea-place-profile-page-images-container').slick({
			  slidesToShow: 3,
			  centerMode: true,
			  infinite: true,
			  lazyLoad: 'ondemand',
			  prevArrow: '.photoalbum-prev',
			  nextArrow: '.photoalbum-next',



  responsive: [
    {
      breakpoint: 767,
      settings: {
        arrows: false,
        slidesToShow: 2
      }
    },
    {
      breakpoint: 543,
      settings: {
        slidesToShow: 1
      }
    }
  ]



			});
		}

	}

	return methods;

})();



var ListingUser = (function() {

	var methods = {

		heightAdjust: function() {
			$('.listing-page-map-container img').css({
				'height': $(window).height() - 65
			});			
			$('.listing-page-query-profile').css({
				'height': $(window).height() - 135
			});						
			$(window).on('debouncedresize', function( event ) {
				$('.listing-page-map-container img').css({
					'height': $(window).height() - 65
				});
				$('.listing-page-query-profile').css({
					'height': $(window).height() - 135
				});					
			});			
		}

	}

	return methods;

})();


var ListingPlaceUser = (function() {

	var methods = {

		heightAdjust: function() {
			$('.listing-place-page-map-container img').css({
				'height': $(window).height() - 65
			});			
			$('.listing-place-page-ads').css({
				'height': $(window).height() - 135
			});						
			$(window).on('debouncedresize', function( event ) {
				$('.listing-place-page-map-container img').css({
					'height': $(window).height() - 65
				});
				$('.listing-place-page-ads').css({
					'height': $(window).height() - 135
				});					
			});			
		}

	}

	return methods;

})();
