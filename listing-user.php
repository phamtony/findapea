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
						
						<div class="col-xs-12 col-md-7 col-lg-6">
							<div class="listing-page-query">
								<div class="listing-page-query-container">
									
									<div class="listing-page-query-filter cs-both-sub-seperation cs-sub-fullpage-pad">
										<div class="listing-page-query-filter-container">
											
											<div class="listing-page-query-filter-search">
												<div class="listing-page-query-filter-search-container">
													<form action="/">
														<input type="text">
														<i class="fa fa-search" aria-hidden="true"></i>
														<span class="gray search-bar-filter">
															Filter
														</span>
													</form>
												</div>
											</div>

										</div>
									</div>


									<div class="listing-page-query-profile">
										<div class="listing-page-query-profile-container">


											<?php include('_profileInListing.inc.php');?>		
											<?php include('_pagination.inc.php');?>		
											

										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="col-md-5 col-lg-6 hidden-sm-down">
							<div class="listing-page-map">
								<div class="listing-page-map-container">
									<img src="/img/user-listing-map.jpg" alt="">
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
