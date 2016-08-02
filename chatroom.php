<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Findapea - Chatroom Page</title>

	<?php include('_head.css.inc.php');?>

</head>

<body>


	<header>
		<?php include('_header.inc.php');?>		
	</header>


	<main>
		<div class="findapea-chatroom-page">
			<div class="findapea-chatroom-page-container">

	
				<div class="container-fluid">
					<div class="row no-gutter">
						
						<div class="col-md-6">
							<div class="findapea-chatroom-list">
								<div class="findapea-chatroom-list-container">
									<?php include('_profileInListing.inc.php');?>		
								</div>
							</div>
						</div>


						<div class="col-md-6">
							<div class="findapea-chatroom-window">
								<div class="findapea-chatroom-window-container">
										
									<!-- Temp Picture -->
									<img style="width: 100%" src="/img/chat.jpg" alt="">

									<div class="findapea-chatroom-chatwindow">
										<div class="findapea-chatroom-chatwindow-container">
										</div>
									</div>

									<div class="findapea-chatroom-entertext">
										<div class="findapea-chatroom-entertext-container">
										</div>
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
