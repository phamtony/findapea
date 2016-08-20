<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Findapea - Place Profile</title>

	<?php include('_head.css.inc.php');?>

</head>

<body>


	<header>
		<?php include('_header.inc.php');?>		
	</header>


	<main>
		<div class="findapea-place-profile-page">
			<div class="findapea-place-profile-page-container center">

	
				<div class="container-fluid">

					<div class="row no-gutter">		
						<div class="col-xs-12">
							<div class="findapea-place-profile-page-images">
								<div class="findapea-place-profile-page-images-container">
									<?php for($i = 1; $i < 7; $i++) { ?>
										<div>
											<img src="/img/apt<?php echo $i; ?>.jpg" alt="">
										</div>
									<?php } ?>
								</div>
								<i class="fa fa-chevron-left floating-arrow pea-left-arrow photoalbum-prev hidden-sm-down"></i>
								<i class="fa fa-chevron-right floating-arrow pea-right-arrow photoalbum-next hidden-sm-down"></i>	
							</div>
						</div>
					</div>

					<div class="row no-gutter">
						<div class="col-xs-12">
							<div class="findapea-place-profile-page-terms cs-both-seperation cs-sub-fullpage-pad">
								<div class="findapea-place-profile-page-terms-container small-wrap center">
									<p class="text-xs-center">$1200/per month</p>
									<!-- Add more things to this content -->
								</div>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-xs-12">
							<div class="findapea-place-profile-page-main-content cs-both-seperation">
								<div class="findapea-place-profile-page-main-content-container mid-wrap center">
									<div class="row">
										

										<div class="col-sm-3">
											<div class="findapea-place-profile-page-user-info cs-both-sub-seperation cs-sub-fullpage-pad">
												<div class="findapea-place-profile-page-user-info-container">
													<h5 class="cs-sub-seperation">My Profile</h5>
													<div class="findapea-place-profile-page-user-info-profile-pic center cs-sub-seperation">
														<div class="findapea-place-profile-page-user-info-profile-pic-container">
															<a href="/profile.php">
																<img src="/img/profile1.jpg" alt="">
																<p class="gray text-xs-center">Tony Pham</p>
															</a>
														</div>
													</div>
													<p class="cs-sub-seperation">
														My husband and I are world travelers who enjoy meeting new people, trying new foods, exploring new places and cultures. We are especially fond of architecture and historic house museums, the Arts & Crafts movement, swimming in beautiful and interesting bodies of water, and things Italian.	
													</p>
													
													<div>
														
												  <div class="form-group">
												    <label for="message-area"><i class="fa fa-envelope" aria-hidden="true"></i> Message me!</label>
												    <textarea class="form-control" id="message-area" rows="4" style="font-size: .9em;"></textarea>
												  </div>

												  <button class="btn-green-white">
												  	Send
												  </button>

													</div>
												</div>
											</div>
										</div>



										<div class="col-sm-9">
											<div class="findapea-place-profile-page-information">
												<div class="findapea-place-profile-page-information-container">

													<div class="row">
														<div class="col-xs-12">
															<div class="findapea-place-profile-page-information-description">
																<div class="findapea-place-profile-page-information-description-container">
<!-- 																	Description module
																	-Space
																	-description
																	-price
																	-avaiable stuff -->
																</div>
															</div>
														</div>
													</div>



													<div class="row">
														<div class="col-xs-12">
															<div class="findapea-place-profile-page-information-amenities">
																<div class="findapea-place-profile-page-information-amenities-container">
																	
																</div>
															</div>
														</div>
													</div>



<!-- 													<div class="row">
														<div class="col-xs-12">
															<div class="findapea-place-profile-page-information-gallery">
																<div class="findapea-place-profile-page-information-gallery-container">
																	
																</div>
															</div>
														</div>
													</div> -->


													<div class="row">
														<div class="col-xs-12">
															<div class="findapea-place-profile-page-information-reviews">
																<div class="findapea-place-profile-page-information-reviews-container">
																	<!-- reviews based  -->
																	<!-- picture with reviews and date -->
																</div>
															</div>
														</div>
													</div>

													<div class="row">
														<div class="col-xs-12">
															<div class="findapea-place-profile-page-information-map">
																<div class="findapea-place-profile-page-information-map-container">
																	<!-- add an image here -->
																</div>
															</div>
														</div>
													</div>																										


													
												</div>
											</div>
										</div>


									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-xs-12">
							<?php include('_similar-place.inc.php');?>					
						</div>
					</div>


				</div>		


			</div>
		</div>		
	</main>

	<footer>
		<?php include('_footer.inc.php');?>
	</footer>

	<?php include('_js.inc.php');?>


</body>
</html>				
