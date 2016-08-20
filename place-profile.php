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
									<p class="text-xs-center gray">
										<span class="green"><strong>$1200</strong></span> per month

									</p>
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
											<div class="findapea-place-profile-page-user-info cs-both-sub-seperation cs-sub-fullpage-pad" id="findapea_place_profile_box">
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


																	<div class="findapea-place-profile-page-description-module findapea-place-profile-page-module-box cs-section">
																		<p class="findapea-place-profile-page-title-module">
																			Description
																		</p>
																		<div class="findapea-place-profile-page-description-module-container cs-sub-fullpage-pad cs-both-sub-seperation">
																			<p>
The Space <br><br>	

Very quiet bedroom with queen bed in attic with sitting area. Up two sets of stairs of 10 and 15 steps each. There is a patio right outside the kitchen where to enjoy listening to the water of the fountain. <br><br>	

Guest Access <br><br>	

There are two restrooms. Several gyms are close by, but the walks and runs along the Charles River enjoying the City of Boston skyline will be your favorite. <br><br>	

Interaction with Guests <br><br>	

I can certainly offer any assistance or any recommendation during the stay. <br><br>	

The Neighborhood <br><br>	

The house is in East Cambridge, 3 blocks away from Boston and the Charles River. You will enjoy great walks and running by the river. Boston is just across the Charles. Friendly family neighborhood with grocery store and mall close by. Logan Airport is 15 minutes away. Enjoy Boston for a third of the price! <br><br>	

Getting Around <br><br>	

The house is 3 blocks away from the green line (Lechmere stop) and 8 from the red line (Kendall Square/MIT station). Public transportation is amazing in Boston. Uber, taxis, Zipcar, busses, subway are all around the corner of a quiet street. <br><br>	

Other Things to Note <br><br>	

There is Duke, the black cat born in New Orleans during Katrina disaster. His full name is Duke Ellington.																				
																			</p>
																		</div>
																	</div>


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
															<div class="findapea-place-profile-page-information-amenities findapea-place-profile-page-module-box cs-section">
																<p class="findapea-place-profile-page-title-module">
																	Amenities
																</p>															
																<div class="findapea-place-profile-page-information-amenities-container cs-sub-fullpage-pad cs-both-sub-seperation">
																	
																	<ul>
																		<li><i class="fa fa-bed" aria-hidden="true"></i> Furnished</li>
																		<li><i class="fa fa-television" aria-hidden="true"></i> TV</li>
																		<li><i class="fa fa-phone" aria-hidden="true"></i> Phone</li>
																		<li><i class="fa fa-link" aria-hidden="true"></i> Internet</li>
																		<li><i class="fa fa-female" aria-hidden="true"></i>  Showers</li>
																		<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Dryer</li>
																	</ul>

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


<!-- 													<div class="row">
														<div class="col-xs-12">
															<div class="findapea-place-profile-page-information-reviews">
																<div class="findapea-place-profile-page-information-reviews-container"> -->
																	<!-- reviews based  -->
																	<!-- picture with reviews and date -->
<!-- 																</div>
															</div>
														</div>
													</div> -->

													<div class="row">
														<div class="col-xs-12">
															<div class="findapea-place-profile-page-information-map cs-section" style="width: 100%">
																<div class="findapea-place-profile-page-information-map-container">
																	<img src="/img/map.png" style="width: 100%" alt="">
																</div>
															</div>
														</div>
													</div>																										


													
												</div>
											</div>
										</div>


									</div>


					<div class="row similiar_place">
							<?php include('_similar-place.inc.php');?>					
					</div>


								</div>
							</div>
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
