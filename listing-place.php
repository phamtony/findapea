<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Findapea - Listing Place Page</title>

	<?php include('_head.css.inc.php');?>

</head>

<body>


	<header>
		<?php include('_header.inc.php');?>		
	</header>


	<main>
		<div class="findapea-listing-place-page">
			<div class="findapea-listing-place-page-container">

	
				<div class="container-fluid">
					<div class="row no-gutter">
						
						<div class="col-xs-12 col-md-7">


							<div class="listing-place-page-query">
								<div class="listing-place-page-query-container">
									


									<div class="listing-place-page-query-filter cs-both-sub-seperation cs-sub-fullpage-pad">
										<div class="listing-place-page-query-filter-container">
											
											<div class="listing-place-page-query-filter-search">
												<div class="listing-place-page-query-filter-search-container">
													<form action="/">
														<input type="text">
														<i class="fa fa-location-arrow" aria-hidden="true"></i>
														<span class="gray search-bar-filter">
															Filter
														</span>
													</form>
												</div>
											</div>

										</div>
									</div>


									<div class="listing-place-page-ads">
										<div class="listing-place-page-ads-container cs-sub-fullpage-mar cs-both-sub-section">
											<div class="row">

												<?php include('_placeInListing.inc.php');?>		
												<?php include('_pagination.inc.php');?>		
											
											</div>
										</div>
									</div>

								</div>
							</div>



						</div>



						<div class="col-md-5 hidden-sm-down">
							<div class="listing-place-page-map">
								<div class="listing-place-page-map-container">
									<img src="/img/listing-map.jpg" alt="">
								</div>
							</div>
						</div>


					</div>
				</div>		



			</div>
		</div>		
	</main>


	<?php include('_js.inc.php');?>


</body>
</html>				
