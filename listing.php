<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Findapea - Listing Page</title>

	<?php include('_head.css.inc.php');?>

</head>

<body>


	<header>
		<?php include('_header.inc.php');?>		
	</header>


	<main>
		<div class="findapea-listing-page">
			<div class="findapea-listing-page-container">

	
				<div class="container-fluid">
					<div class="row no-gutter">
						
						<div class="col-xs-12 col-md-6">
							<div class="listing-page-query">
								<div class="listing-page-query-container">
									
									<div class="listing-page-query-filter">
										<div class="listing-page-query-filter-container cs-both-sub-seperation cs-sub-fullpage-pad">
											
											<div class="listing-page-query-filter-search">
												<div class="listing-page-query-filter-search-container cs-sub-seperation">
													<input type="text">
												</div>
											</div>

											<div class="list-page-query-filter-choice">
												<div class="list-page-query-filter-choice-container">
													<input type="radio"> Chill
													<input type="radio"> Chill
													<input type="radio"> Chill
													<input type="radio"> Chill
													<input type="radio"> Chill
													<input type="radio"> Chill
													<input type="radio"> Chill
												</div>
											</div>

										</div>
									</div>


									<div class="listing-page-query-profile">
										<div class="listing-page-query-profile-container">


											<?php include('_profile.inc.php');?>		
											

										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="col-md-6 hidden-sm-down">
							<div class="listing-page-map">
								<div class="listing-page-map-container">
									<img src="/img/listing-map.jpg" alt="">
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
