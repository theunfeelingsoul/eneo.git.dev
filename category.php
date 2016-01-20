<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eneo</title>

	<link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style/custom.css">

	<link rel="stylesheet" type="text/css" href="style/font-awesome/css/font-awesome.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<!-- maps -->
	<script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
          center: new google.maps.LatLng(35.6850, 139.7514),
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body>
	
	
	

	<!-- Begin header -->
	<?php include 'includes/_header.php'; ?>
	<!-- End header -->

	<!-- Begin geo-loc-map -->
	<div id="geo-loc-map">
		<div class="container-fluid">
			<div class="row">
				<div id="map">
					
				</div>
			</div>
		</div>
	</div>
	<!-- End geo-loc-map -->

	<div class="page">
		<div id="main-content">
			<!-- Begin categories -->
			<!-- <div id="business-categories"> -->
			<div id="">
				<div class="container">
					<div class="row">
						<div class="">
							<div class="main">
								<div class="col-md-12">
									<div class="page-title-content">
										<h2 class="page-title">
											LISTING CATEGORY
										</h2>
										<p class="page-title-description">
											Nulla nisl urna, faucibus eu est eu, rhoncus gravida diam. 
											Ut egestas placerat eros, ultrices pharetra metus rutrum ac. 
											Sed id mollis libero. Vivamus fermentum consectetur erat sit 
											amet mattis.
										</p>
									</div>
								</div>
								<div class="cat-content">
									<div class="cat-row cat-row-1 col-md-4">
										<div class="cat-row-inner">
											<div class="cat-row-image">
												<div class="Cat-image">
													<a href="">
														<img src="images/1.jpg" width="400" height="240">
													</a>
												</div>
											</div>
											<div class="views-field views-field-title">
												<a href="">Liston Grilled Seafood</a>
											</div>

											<div class="views-field views-field-address">
												<i class="fa fa-home"></i>
												25-29 Ardmore Avenue, Avenel
											</div>

											<div class="views-field views-field-phone">
												<i class="fa fa-phone"></i>
												25-29 Ardmore Avenue, Avenel
											</div>
											

											<div class="views-field views-field-website">
												<i class="fa fa-globe"></i>
												<a href="">incredibledesinesafrica.com</a>
											</div>
											
											<div class="cat-row-address">
												
											</div>
											<div class="cat-row-phone">
												
											</div>
											<div class="cat-row-website">
												
											</div>
										</div>
									</div>

									<div class="cat-row cat-row-2 col-md-4">
										<div class="cat-row-inner">
											<div class="cat-row-image">
												<div class="Cat-image">
													<a href="">
														<img src="images/p2.jpg" width="400" height="240">
													</a>
												</div>
											</div>
											<div class="views-field views-field-title">
												<a href="">Liston Grilled Seafood</a>
											</div>

											<div class="views-field views-field-address">
												<i class="fa fa-home"></i>
												25-29 Ardmore Avenue, Avenel
											</div>

											<div class="views-field views-field-phone">
												<i class="fa fa-phone"></i>
												25-29 Ardmore Avenue, Avenel
											</div>
											

											<div class="views-field views-field-website">
												<i class="fa fa-globe"></i>
												<a href="">incredibledesinesafrica.com</a>
											</div>
											
											<div class="cat-row-address">
												
											</div>
											<div class="cat-row-phone">
												
											</div>
											<div class="cat-row-website">
												
											</div>
										</div>
									</div>

									<div class="cat-row cat-row-3 col-md-4">
										<div class="cat-row-inner">
											<div class="cat-row-image">
												<div class="Cat-image">
													<a href="">
														<img src="images/p3.jpg" width="400" height="240">
													</a>
												</div>
											</div>
											<div class="views-field views-field-title">
												<a href="">Liston Grilled Seafood</a>
											</div>

											<div class="views-field views-field-address">
												<i class="fa fa-home"></i>
												25-29 Ardmore Avenue, Avenel
											</div>

											<div class="views-field views-field-phone">
												<i class="fa fa-phone"></i>
												25-29 Ardmore Avenue, Avenel
											</div>
											

											<div class="views-field views-field-website">
												<i class="fa fa-globe"></i>
												<a href="">incredibledesinesafrica.com</a>
											</div>
											
											<div class="cat-row-address">
												
											</div>
											<div class="cat-row-phone">
												
											</div>
											<div class="cat-row-website">
												
											</div>
										</div>
									</div>

									<div class="cat-row cat-row-4 col-md-4">
										<div class="cat-row-inner">
											<div class="cat-row-image">
												<div class="Cat-image">
													<a href="">
														<img src="images/p4.jpg" width="400" height="240">
													</a>
												</div>
											</div>
											<div class="views-field views-field-title">
												<a href="">Liston Grilled Seafood</a>
											</div>

											<div class="views-field views-field-address">
												<i class="fa fa-home"></i>
												25-29 Ardmore Avenue, Avenel
											</div>

											<div class="views-field views-field-phone">
												<i class="fa fa-phone"></i>
												25-29 Ardmore Avenue, Avenel
											</div>
											

											<div class="views-field views-field-website">
												<i class="fa fa-globe"></i>
												<a href="">incredibledesinesafrica.com</a>
											</div>
											
											<div class="cat-row-address">
												
											</div>
											<div class="cat-row-phone">
												
											</div>
											<div class="cat-row-website">
												
											</div>
										</div>
									</div>

									<div class="cat-row cat-row-5 col-md-4">
										<div class="cat-row-inner">
											<div class="cat-row-image">
												<div class="Cat-image">
													<a href="">
														<img src="images/p5.jpg" width="400" height="240">
													</a>
												</div>
											</div>
											<div class="views-field views-field-title">
												<a href="">Liston Grilled Seafood</a>
											</div>

											<div class="views-field views-field-address">
												<i class="fa fa-home"></i>
												25-29 Ardmore Avenue, Avenel
											</div>

											<div class="views-field views-field-phone">
												<i class="fa fa-phone"></i>
												25-29 Ardmore Avenue, Avenel
											</div>
											

											<div class="views-field views-field-website">
												<i class="fa fa-globe"></i>
												<a href="">incredibledesinesafrica.com</a>
											</div>
											
											<div class="cat-row-address">
												
											</div>
											<div class="cat-row-phone">
												
											</div>
											<div class="cat-row-website">
												
											</div>
										</div>
									</div>

									<div class="cat-row cat-row-6 col-md-4">
										<div class="cat-row-inner">
											<div class="cat-row-image">
												<div class="Cat-image">
													<a href="">
														<img src="images/p1.jpg" width="400" height="240">
													</a>
												</div>
											</div>
											<div class="views-field views-field-title">
												<a href="">Liston Grilled Seafood</a>
											</div>

											<div class="views-field views-field-address">
												<i class="fa fa-home"></i>
												25-29 Ardmore Avenue, Avenel
											</div>

											<div class="views-field views-field-phone">
												<i class="fa fa-phone"></i>
												25-29 Ardmore Avenue, Avenel
											</div>
											

											<div class="views-field views-field-website">
												<i class="fa fa-globe"></i>
												<a href="">incredibledesinesafrica.com</a>
											</div>
											
											<div class="cat-row-address">
												
											</div>
											<div class="cat-row-phone">
												
											</div>
											<div class="cat-row-website">
												
											</div>
										</div>
									</div>



									



								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End categories -->
		</div>
		<!-- End main-content -->
	</div>
	<!-- End page -->

	<!-- Start footer -->
	<div id="footer">
		<P>END</P>
	</div>
	<!-- End footer -->

</body>
</html>

