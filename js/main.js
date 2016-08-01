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