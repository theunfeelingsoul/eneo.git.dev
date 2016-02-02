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
        var mapCanvas = document.getElementById('map-c');
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

	<div class="container-fluid">
		<div class="row">
			<!-- #business-banner -->
			<div id="business-banner">
				<div class="container">
					<div class="row">
						<div class="business-banner-content">
							<div class="col-md-8">
								<div class="business-banner-title">
									Modern Jeans
								</div>
								<div class="business-banner-detail">
									<div class="business-banner-detail-address">
										<span class="glyphicon glyphicon-home"></span>
										Westlands, Mogotio rd,
									</div>
									<div class="business-banner-detail-phone">
										<span class="glyphicon glyphicon-phone-alt"></span>
										0722383897
									</div>
									<div class="business-banner-detail-website">
										<span class="glyphicon glyphicon-globe"></span>
										<a href="">Symphony</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
							
								<div class="field-map" id="map-c">
									<!-- <div class="field-map"></div> -->
								</div>
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div id="business-detail-review">
					<div class="col-ms-8">
						<div class="business-detail-review-rating"></div>
						<div class="business-detail-review-comment">
							<a href="" class="btn btn-primary">Write a comment</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- EOF: .conatiner-fluid -->
	</div>

	<div id="Page">
		<div id="main-content">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="business-detail-article">
							<div class="side-item">
								<div>Business Topics</div>
								<ul class="side-item-list">
									<li><a href="">Business Skills<span class="info-text">(5)</span></a></li>
									<li><a href="">Productivity<span class="info-text">(9)</span></a></li>
									<li><a href="">Operating Systems<span class="info-text">(4)</span></a></li>
								</ul>
							</div>

							<div class="side-item">
								<div>Business Software</div>
								<ul class="side-item-list">
									<li><a href="">Microsoft<span class="info-text">(5)</span></a></li>
									<li><a href="">Office<span class="info-text">(6)</span></a></li>
									<li><a href="">Word<span class="info-text">(1)</span></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="business-detail-article">
							<div class="text-center">
								<iframe width="660" height="415" src="https://www.youtube.com/embed/Xuav1TPhLQw" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Start footer -->
	<div id="footer">
		<P>END</P>
	</div>
	<!-- End footer -->

</body>
</html>

