	<!-- Third Party JS -->
	<script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="/bower_components/tether/dist/js/tether.min.js"></script>
	<script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/bower_components/slick-carousel/slick/slick.min.js"></script>
	<script type="text/javascript" src="/bower_components/jquery_lazyload/jquery.lazyload.js"></script>
	<script type="text/javascript" src="/bower_components/freewall/freewall.js"></script>
	<script type="text/javascript" src="/bower_components/fancyBox/source/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="/bower_components/jquery-hoverintent/jquery.hoverIntent.js"></script>
	<script type="text/javascript" src="/bower_components/matchHeight/dist/jquery.matchHeight-min.js"></script>	
	<script type="text/javascript" src="/bower_components/jquery-smartresize/jquery.debouncedresize.js"></script>		
	<script type="text/javascript" src="/bower_components/scrolltofixed/jquery-scrolltofixed-min.js"></script>

	<!-- Custom JS -->
	<script type="text/javascript" src="/js/main.js"></script>


	<script>
	$(document).ready(function() {
		PeaProfile.photoAlbum();
		PeaProfile.albumFancybox();
		ListingUser.heightAdjust();
		ListingPlaceUser.heightAdjust();
		PlaceProfile.slickCarousel();
		PlaceProfile.scrollTofixed();
	});
	</script>